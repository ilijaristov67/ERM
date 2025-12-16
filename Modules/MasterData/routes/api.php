<?php

use Illuminate\Support\Facades\Route;
use Modules\MasterData\Http\Controllers\Item\StoreItemController;

Route::prefix('/items')
    ->name('items.')
    ->group(function () {
        Route::post('/', StoreItemController::class)->name('store')->middleware(['permission:master-data-items-create']);
    });
