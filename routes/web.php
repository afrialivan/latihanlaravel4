<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PostController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'register'])->middleware('guest');

Route::get('/create', [PostController::class, 'create'])->middleware('auth');
Route::post('/create', [PostController::class, 'store'])->middleware('auth');

Route::get('/posts/{post:slug}', [PostController::class, 'show'])->middleware('auth');

Route::get('/posts/edit/{post:slug}', [PostController::class, 'edit'])->middleware('auth');
Route::post('/posts/edit/{post:slug}', [PostController::class, 'update'])->middleware('auth');
Route::get('/posts/hapus/{post:slug}', [PostController::class, 'destroy'])->middleware('auth');

