<?php

use Illuminate\Support\Facades\Route;
use Modules\TestProduct\Http\Controllers\TestProductController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('testproduct', TestProductController::class)->names('testproduct');
});
