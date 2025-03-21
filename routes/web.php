<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Client\HomeController as ClientHomeController;
use App\Http\Controllers\Client\ProductController;
use App\Livewire\Posts\CreatePost;
use App\Livewire\Posts\Posts;
use App\Livewire\Posts\UpdatePost;
use App\Livewire\Todos\Todos;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

// Route::get('/', function () {
//    $query = DB::table('users')->select('id');
//    return $query;
// });
Route::get('/', [ClientHomeController::class, 'index']);
Route::get('/chi-tiet-sp/{slug}', [ProductController::class, 'detail']);
Route::get('/list', function () {
   return '<h1>List</h1>';
})->name('list');
Route::get('/post/create', CreatePost::class);
Route::get('/post', Posts::class);
Route::get('post/edit/{post}', UpdatePost::class);
Route::get('todos', Todos::class);

