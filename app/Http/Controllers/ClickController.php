<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Click;

class ClickController extends Controller
{
    public function trackClick(Request $request)
    {
        $email = $request->query('email');

        if($email) {
            Click::create([
                'email' => $email,
                'ip_address' => $request->ip(),
                'clicked_at' => now(),
            ]);
        }

        return redirect()->route('you-are-phished');
    }
}
