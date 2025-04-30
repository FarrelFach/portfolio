<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

Route::redirect('/', '/home');
Route::get('/login', [LoginController::class, 'ShowLoginForm'])->name('login');
Route::get('/register', [LoginController::class, 'ShowRegisterForm'])->name('register');
Route::get('/landing', [HomeController::class, 'landing'])->name('landing');
Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/test', [HomeController::class, 'test'])->name('test');