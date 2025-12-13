<?php

use Illuminate\Support\Facades\Route;
use Modules\Inventory\Http\Controllers\Product\DeleteProductController;
use Modules\Inventory\Http\Controllers\Product\IndexProductController;
use Modules\Inventory\Http\Controllers\Product\PatchProductController;
use Modules\Inventory\Http\Controllers\Product\StoreProductController;

Route::prefix('/products')
    ->name('products.')
    ->group(function () {
        Route::post('/', StoreProductController::class)->name('store')->middleware(['permission:inventory-products-create']);
        Route::patch('/{product}', PatchProductController::class)->name('patch')->middleware(['permission:inventory-products-update']);
    });
