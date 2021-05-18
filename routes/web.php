<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostLikeController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth.register');
});

//Route::get('/dashboard', [PostController::class, 'index'])
//    ->name('dashboard')
//    ->middleware('auth');

Route::get('/dashboard', [PostController::class, 'index'])->name('dashboard');
Route::post('/dashboard', [PostController::class, 'store']);
Route::delete('/dashboard/{post}', [PostController::class, 'destroy'])->name('posts.delete');


Route::post('/dashboard/{post}/likes', [PostLikeController::class, 'store'])->name('posts.likes');
Route::delete('/dashboard/{post}/likes', [PostLikeController::class, 'destroy'])->name('posts.likes');

Route::get('/favourites', [PostLikeController::class, 'show'])->name('favourites');


Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/fail', function () {
    return view('page_not_found');
});

