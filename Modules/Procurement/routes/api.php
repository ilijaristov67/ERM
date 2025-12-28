<?php

use Illuminate\Support\Facades\Route;
use Modules\Procurement\Http\Controllers\Supplier\StoreSupplierController;

Route::prefix('/suppliers')
    ->name('suppliers.')
    ->group(function () {
        Route::post('/', StoreSupplierController::class)->name('store')->middleware(['permission:procurement-suppliers-create']);
    });
