<?php

use Illuminate\Support\Facades\Route;
use Modules\MasterData\Http\Controllers\Item\IndexItemController;
use Modules\MasterData\Http\Controllers\Item\PatchItemController;
use Modules\MasterData\Http\Controllers\Item\StoreItemController;

Route::prefix('/items')
    ->name('items.')
    ->group(function () {
        Route::post('/', StoreItemController::class)->name('store')->middleware(['permission:master-data-items-create']);
        Route::patch('/{item}', PatchItemController::class)->name('patch')->middleware(['permission:master-data-items-update']);
        Route::get('/', IndexItemController::class)->name('index')->middleware(['permission:master-data-items-read']);
    });
