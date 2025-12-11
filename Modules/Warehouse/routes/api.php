<?php

use Illuminate\Support\Facades\Route;
use Modules\Warehouse\Http\Controllers\WarehouseController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('warehouses', WarehouseController::class)->names('warehouse');
});
