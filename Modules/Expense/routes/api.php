<?php

use Illuminate\Support\Facades\Route;
use Modules\Expense\Http\Controllers\ExpenseController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('expenses', ExpenseController::class)->names('expense');
});
