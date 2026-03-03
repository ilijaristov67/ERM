<?php

use Illuminate\Support\Facades\Route;
use Modules\Procurement\Http\Controllers\Supplier\DeleteSupplierController;
use Modules\Procurement\Http\Controllers\Supplier\IndexSupplierController;
use Modules\Procurement\Http\Controllers\Supplier\PatchSupplierController;
use Modules\Procurement\Http\Controllers\Supplier\StoreSupplierController;

Route::prefix('/suppliers')
    ->name('suppliers.')
    ->group(function () {
        Route::post('/', StoreSupplierController::class)->name('store')->middleware(['permission:procurement-suppliers-create']);
        Route::patch('/{supplier}', PatchSupplierController::class)->name('patch')->middleware(['permission:procurement-suppliers-update']);
        Route::get('/', IndexSupplierController::class)->name('index')->middleware(['permission:procurement-suppliers-read']);
        Route::delete('/{supplier}', DeleteSupplierController::class)->name('delete')->middleware(['permission:procurement-suppliers-delete']);
    });
