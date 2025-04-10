<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClickController;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('phished', function () {
    return Inertia::render('Phished');
})->name('you-are-phished');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('phishedlist', function () {
    return Inertia::render('Phished List');
})->middleware(['auth', 'verified'])->name('phishedlist');

Route::get('/track', [ClickController::class, 'trackClick'])->name('track');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
