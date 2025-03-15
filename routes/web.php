<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

// Route::get('/', function () {
//    $query = DB::table('users')->select('id');
//    return $query;
// });
Route::get('/', function () {
   return view('welcome');
});