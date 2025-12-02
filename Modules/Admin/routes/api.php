<?php

use Illuminate\Support\Facades\Route;
use Modules\Admin\Http\Controllers\Auth\LoginController;
use Modules\Admin\Http\Controllers\Auth\LogoutController;
use Modules\Admin\Http\Controllers\Auth\RefreshController;
use Modules\Admin\Http\Controllers\Company\DeleteCompanyController;
use Modules\Admin\Http\Controllers\Company\IndexCompanyController;
use Modules\Admin\Http\Controllers\Company\PatchCompanyController;
use Modules\Admin\Http\Controllers\Company\StoreCompanyController;
use Modules\Admin\Http\Controllers\Country\PatchCountryController;
use Modules\Admin\Http\Controllers\Country\StoreCountryController;

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

Route::prefix('/companies')
    ->name('companies.')
    ->group(function () {
        Route::post('/', StoreCompanyController::class)->name('store')->middleware(['permission:admin-companies-create']);
        Route::patch('{company}', PatchCompanyController::class)->name('patch')->middleware(['permission:admin-companies-update']);
        Route::delete('{company}', DeleteCompanyController::class)->name('delete')->middleware(['permission:admin-companies-delete']);
        Route::get('/', IndexCompanyController::class)->name('index')->middleware(['permission:admin-companies-read']);
    });

Route::prefix('/countries')
    ->name('countries.')
    ->group(function () {
        Route::post('/', StoreCountryController::class)->name('store')->middleware(['permission:admin-countries-create']);
        Route::patch('/{country}', PatchCountryController::class)->name('patch')->middleware(['permission:admin-countries-update']);
    });
