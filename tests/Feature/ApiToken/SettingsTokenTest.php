<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Laravel\Sanctum\Sanctum;
use Inertia\Testing\AssertableInertia as Assert;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SettingsTokenTest extends TestCase
{
    use RefreshDatabase;

    public function test_display_token_management_page()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('settings/api-tokens');

        $response->assertOk()
             ->assertInertia(fn (Assert $page) =>
                 $page->component('settings/APITokens')
                      ->has('auth.user')
             );
    }

    public function test_user_can_create_token()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $tokenData = [
            'name' => 'Test Token',
            'permissions' => ['create', 'read'],
        ];

        $response = $this->post(route('settings.api-tokens.store'), $tokenData);

        $response->assertStatus(302);
        $response->assertRedirect(url()->previous());

        $this->assertDatabaseHas('personal_access_tokens', [
            'name' => 'Test Token',
            'tokenable_id' => $user->id,
        ]);
    }

    public function test_user_can_update_token_permissions()
    {
        $user = User::factory()->create();
        Sanctum::actingAs($user);

        $token = $user->createToken('Initial Token', ['read']);
        $tokenId = $token->accessToken->id;

        $updatedTokenData = [
            'permissions' => ['read', 'update'],
        ];

        $response = $this->put(route('settings.api-tokens.update', ['token' => $tokenId]), $updatedTokenData);

        $response->assertStatus(302);
        $response->assertRedirect(url()->previous());

        $this->assertDatabaseHas('personal_access_tokens', [
            'id' => $tokenId,
            'name' => 'Initial Token',
            'abilities' => json_encode(['read', 'update']),
        ]);
    }

    public function test_user_can_delete_token()
    {
        $user = User::factory()->create();
        Sanctum::actingAs($user);

        $token = $user->createToken('Delete Token', ['read']);
        $tokenId = $token->accessToken->id;

        $response = $this->delete(route('settings.api-tokens.destroy', ['token' => $tokenId]));

        $response->assertStatus(302);

        $this->assertDatabaseMissing('personal_access_tokens', [
            'id' => $tokenId,
        ]);
    }
}
