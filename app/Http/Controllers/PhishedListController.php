<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Click;

class PhishedListController extends Controller
{
    public function index() {
        $clicks = Click::orderBy('id', 'desc')->get();
        return inertia('Phished List', [
            'clicks' => $clicks,
        ]);
    }
}
