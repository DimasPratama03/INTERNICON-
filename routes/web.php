<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;


//Route Login
Route::get('', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::get('register2', [AuthController::class, 'showRegisterForm2'])->name('register2');
Route::get('forgot-password', [AuthController::class, 'showForgotPasswordForm'])->name('forgot.password');


//Route Page
// Route::middleware(['auth'])->group(function () {
//     Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
// });

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');