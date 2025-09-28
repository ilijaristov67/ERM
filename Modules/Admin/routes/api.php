<?php

use Illuminate\Support\Facades\Route;
use Modules\Admin\Http\Controllers\User\StoreUserController;

Route::prefix('/users')
    ->name('users.')
    ->group(function () {
        Route::post('/', StoreUserController::class)->name('store');
    });
