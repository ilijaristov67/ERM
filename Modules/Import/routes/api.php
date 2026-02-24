<?php

use Illuminate\Support\Facades\Route;
use Modules\Import\Http\Controllers\Import\IndexImportController;
use Modules\Import\Http\Controllers\Import\PatchImportController;
use Modules\Import\Http\Controllers\Import\StoreImportController;

Route::prefix('/')
    ->name('')
    ->group(function () {
        Route::post('', StoreImportController::class)->name('store')->middleware('permission:import-create');
        Route::patch('/{import}', PatchImportController::class)->name('patch')->middleware('permission:import-update');
        Route::get('/', IndexImportController::class)->name('index')->middleware('permission:import-read');
    });
