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
        Route::delete('/{product}', DeleteProductController::class)->name('delete')->middleware(['permission:inventory-products-delete']);
        Route::patch('/{product}', PatchProductController::class)->name('patch')->middleware(['permission:inventory-products-update']);
        Route::get('/', IndexProductController::class)->name('index')->middleware(['permission:inventory-products-read']);
    });
