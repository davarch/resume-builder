<?php

use App\Http\Controllers\Web\DashboardController;
use App\Http\Controllers\Web\Profile\ShowController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get(
        '/dashboard',
        DashboardController::class
    )->name('dashboard');

    Route::prefix('profile')->as('profile:')->group(function () {
        Route::get('/', ShowController::class)->name('show');
    });
});

require __DIR__.'/auth.php';
