<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login',[AuthController::class, 'login_action'])->name('user.login_action');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register',[AuthController::class, 'register_action'])->name('user.register_action');
