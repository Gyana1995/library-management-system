<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginAndRegisterController;
use App\Http\Controllers\CaptchaController;

Route::get('/', function () {
    return view('welcome');
});
Route::match(['get', 'post'],'login', [LoginAndRegisterController::class, 'login'])->name('login');
Route::match(['get', 'post'], '/register', [LoginAndRegisterController::class, 'register'])->name('register');
Route::match(['get', 'post'], '/admin', [LoginAndRegisterController::class, 'admin'])->name('admin');
Route::match(['get', 'post'], '/librarian', [LoginAndRegisterController::class, 'librarian'])->name('librarian');
Route::match(['get', 'post'], '/user', [LoginAndRegisterController::class, 'user'])->name('user');
Route::get('/captcha-refresh', [CaptchaController::class, 'refreshCaptcha'])->name('captcha.refresh');
