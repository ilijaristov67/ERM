<?php

use Illuminate\Support\Facades\Route;
use Modules\MasterData\Http\Controllers\Item\DeleteItemController;
use Modules\MasterData\Http\Controllers\Item\IndexItemController;
use Modules\MasterData\Http\Controllers\Item\PatchItemController;
use Modules\MasterData\Http\Controllers\Item\StoreItemController;
use Modules\MasterData\Http\Controllers\Location\PatchLocationController;
use Modules\MasterData\Http\Controllers\Location\StoreLocationController;

Route::prefix('/items')
    ->name('items.')
    ->group(function () {
        Route::post('/', StoreItemController::class)->name('store')->middleware(['permission:master-data-items-create']);
        Route::patch('/{item}', PatchItemController::class)->name('patch')->middleware(['permission:master-data-items-update']);
        Route::get('/', IndexItemController::class)->name('index')->middleware(['permission:master-data-items-read']);
        Route::delete('/{item}', DeleteItemController::class)->name('delete')->middleware(['permission:master-data-items-delete']);
    });

Route::prefix('/locations')
    ->name('locations.')
    ->group(function () {
        Route::post('/', StoreLocationController::class)->name('store')->middleware(['permission:master-data-locations-create']);
        Route::patch('/{location}', PatchLocationController::class)->name('patch')->middleware(['permission:master-data-locations-update']);
        Route::get('/', );
    });
