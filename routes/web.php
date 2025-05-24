<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [PostController::class, 'getAllPost']);


// Post related routes
Route::post('/publish', [PostController::class, 'post']);

// Auth related routes
Route::get('/login', [UserController::class, 'loginForm'])->name('auth.login');
Route::post('/go-login', [UserController::class, 'login'])->name('auth.submit-login');

Route::get('/signup/with-email', function() {
    return view('auth.signup.email');
})->name('auth.email');

Route::post('/signup/with-email/submit', [UserController::class, 'signupWitEmail'])->name('auth.signup-email');

Route::get('/signup', [UserController::class, 'registerForm'])->name('auth.signup');
Route::post('/go-signup', [UserController::class, 'register'])->name('auth.submit-register');
