<?php

use App\Http\Controllers\Public\Profile\ShowController as PublicProfileShowController;
use App\Http\Controllers\Web\DashboardController;
use App\Http\Controllers\Web\Profile\Experiences\ShowController as ExperienceShowController;
use App\Http\Controllers\Web\Profile\Shares\ShowController as ShareShowController;
use App\Http\Controllers\Web\Profile\ShowController as ProfileShowController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', DashboardController::class)
        ->name('dashboard');

    Route::prefix('profile')->as('profile:')->group(function () {
        Route::get('/', ProfileShowController::class)
            ->name('show');

        Route::prefix('experiences')->as('experiences:')->group(function () {
            Route::get('/', ExperienceShowController::class)
                ->name('show');
        });

        Route::prefix('shares')->as('shares:')->group(function () {
            Route::get('/', ShareShowController::class)
                ->name('show');
        });
    });
});

Route::get('view/{share:token}', PublicProfileShowController::class)->name('view:share');

require __DIR__.'/auth.php';
