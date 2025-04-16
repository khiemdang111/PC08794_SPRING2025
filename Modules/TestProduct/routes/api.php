<?php

use Illuminate\Support\Facades\Route;
use Modules\TestProduct\Http\Controllers\TestProductController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('testproduct', TestProductController::class)->names('testproduct');
});
