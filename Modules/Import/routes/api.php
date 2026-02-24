<?php

use Illuminate\Support\Facades\Route;
use Modules\Import\Http\Controllers\Import\StoreImportController;


Route::prefix('/')
    ->name('')
    ->group(function () {
        Route::post('',StoreImportController::class)->name('store')->middleware('permission:import-create');
    });
