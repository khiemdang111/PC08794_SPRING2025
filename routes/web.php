<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Client\Auth\AuthController;
use App\Http\Controllers\Client\HomeController as ClientHomeController;
use App\Http\Controllers\Client\ProductController;
use App\Http\Controllers\Client\SinhvienController;
use App\Livewire\Auth\ForgotPassword;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Logout;
use App\Livewire\Auth\ProfileUser;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\ResetPassword;
use App\Livewire\Index;
use App\Livewire\Pages\Products\Index as ProductsIndex;
use App\Livewire\Posts\CreatePost;
use App\Livewire\Posts\Posts;
use App\Livewire\Posts\UpdatePost;
use App\Livewire\Todos\Todos;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//    $query = DB::table('users')->select('id');
//    return $query;
// });
Route::get('/', Index::class);
Route::get('/product', ProductsIndex::class)->name('product.index');
Route::get('/product/{id}', [ProductController::class, 'detail'])->name('product.detail');
Route::get('/login/user', [AuthController::class, 'login'])->name('login.user');
Route::get('/logout', [Logout::class, 'logout'] )->name('logout.user');
Route::get('/register', [AuthController::class, 'register'])->name('register.user');
Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('password.request');
Route::get('/reset-password/{token}', ResetPassword::class)->name('password.reset');
Route::get('/profile/{id}', [AuthController::class, 'editUser'])->name('profile.user');
Route::get('/chi-tiet-sp/{slug}', [ProductController::class, 'detail']);
Route::get('/list', function () {
   return '<h1>List</h1>';
})->name('list');
Route::get('/post/create', CreatePost::class);
Route::get('/post', Posts::class);
Route::get('post/edit/{post}', UpdatePost::class);
Route::get('todos', Todos::class);
Route::get('/sinhvien', [SinhvienController::class, 'index']);

Route::post('/binhluan/{id}', [ProductController::class, 'comment'])->name('commentproduct');