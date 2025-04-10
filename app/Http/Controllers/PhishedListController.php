<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CLick;

class PhishedListController extends Controller
{
    public function index() {
        $clicks = Click::latest()->paginate(10);
        return Inertia::render('Phished List', [
            'clicks' => $clicks,
        ]);
    }
}
