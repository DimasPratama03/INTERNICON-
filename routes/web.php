<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RecentHistoryController;
use App\Http\Controllers\UsersController;

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
Route::get('users', [UsersController::class, 'index'])->name('users');
Route::get('detail', [UsersController::class, 'detail'])->name('detailusers');
Route::get('recenthistory', [RecentHistoryController::class, 'index'])->name('Recent History');
Route::get('detailhistory', [RecentHistoryController::class, 'detail'])->name('detailhistory');