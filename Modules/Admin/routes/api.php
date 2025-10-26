<?php

use Illuminate\Support\Facades\Route;
use Modules\Admin\Http\Controllers\Auth\LoginController;
use Modules\Admin\Http\Controllers\Auth\LogoutController;
use Modules\Admin\Http\Controllers\Auth\RefreshController;

Route::prefix('/users')
    ->name('users.')
    ->group(function () {
        Route::post('/login', LoginController::class)->name('login');
        Route::middleware('jwt.auth')
            ->group(function () {
                Route::post('/logout', LogoutController::class)->name('logout');
                Route::post('/refresh', RefreshController::class)->name('refresh');
            });
    });
