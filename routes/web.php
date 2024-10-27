<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginAndRegisterController;
use App\Http\Controllers\CaptchaController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', [LoginAndRegisterController::class, 'login'])->name('login');
Route::match(['get', 'post'], '/register', [LoginAndRegisterController::class, 'register'])->name('register');
Route::get('/captcha-refresh', [CaptchaController::class, 'refreshCaptcha'])->name('captcha.refresh');
