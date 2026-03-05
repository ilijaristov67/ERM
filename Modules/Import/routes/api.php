<?php

use Illuminate\Support\Facades\Route;
use Modules\Import\Http\Controllers\Import\DeleteImportController;
use Modules\Import\Http\Controllers\Import\IndexImportController;
use Modules\Import\Http\Controllers\Import\Lot\IndexImportLotController;
use Modules\Import\Http\Controllers\Import\Lot\PatchImportLotController;
use Modules\Import\Http\Controllers\Import\Lot\StoreImportLotController;
use Modules\Import\Http\Controllers\Import\PatchImportController;
use Modules\Import\Http\Controllers\Import\StoreImportController;

Route::prefix('/')
    ->name('')
    ->group(function () {
        Route::post('', StoreImportController::class)->name('store')->middleware('permission:import-create');
        Route::patch('/{import}', PatchImportController::class)->name('patch')->middleware('permission:import-update');
        Route::get('/', IndexImportController::class)->name('index')->middleware('permission:import-read');
        Route::delete('/{import}', DeleteImportController::class)->name('delete')->middleware('permission:import-delete');

        Route::prefix('/lots/{import}')
            ->name('lots.')
            ->group(function () {
                Route::post('/', StoreImportLotController::class)->name('store')->middleware('permission:import-lots-create');
                Route::patch('/{import_lot}', PatchImportLotController::class)->name('patch')->middleware('permission:import-lots-update');
                Route::get('/', IndexImportLotController::class)->name('index')->middleware('permission:import-read');
            });
    });
