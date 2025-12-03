<?php

use Illuminate\Support\Facades\Route;
use Modules\Inventory\Http\Controllers\Product\StoreProductController;

Route::prefix('/products')
    ->name('products.')
    ->group(function () {
        Route::post('/', StoreProductController::class)->name('store')->middleware(['permission:inventory-products-create']);
    });
