<?php

use Illuminate\Support\Facades\Route;
use Modules\Import\Http\Controllers\ImportController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('imports', ImportController::class)->names('import');
});
