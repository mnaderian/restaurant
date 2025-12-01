<?php

use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RestaurantController;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Livewire\Settings\TwoFactor;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;

Route::view('/', 'home')->name('home');

Route::prefix('restaurants')
    ->controller(RestaurantController::class)
    ->name('restaurants.')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('search', 'search')->name('search');
        Route::post('filter', 'filter')->name('filter');
        Route::get('{restaurant}/details', 'show')->name('show');
});

Route::prefix('restaurants/{restaurant}/reserve')
    ->middleware('auth')
    ->name('reservation.')
    ->controller(ReservationController::class)
    ->group(function () {
        Route::post('/', 'store')->name('store');
        Route::get('/', 'create')->name('create');
        Route::get('{reservation}/details', 'show')->name('show');
    });

// panels routes
Route::redirect('dashboard', 'user')->name('dashboard');
Route::redirect('manager-panel', 'manager')->name('manager-panel');
Route::redirect('user-panel', 'user')->name('user-panel');

Route::middleware(['auth'])
    ->group(function () {
        Route::redirect('settings', 'settings/profile');

        Route::get('settings/profile', Profile::class)->name('profile.edit');
        Route::get('settings/password', Password::class)->name('user-password.edit');
        Route::get('settings/appearance', Appearance::class)->name('appearance.edit');

        Route::get('settings/two-factor', TwoFactor::class)
            ->middleware(
                when(
                    Features::canManageTwoFactorAuthentication()
                        && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                    ['password.confirm'],
                    [],
                ),
            )
            ->name('two-factor.show');
    });
