<?php

use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\AttendanceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RecentHistoryController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UsersProfileController;

//Route Login
Route::get('', [AuthController::class, 'showLoginForm'])->name('login');

//route Register
Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register/submit', [AuthController::class, 'submitRegister'])->name('register.submit');

Route::get('forgot-password', [AuthController::class, 'showForgotPasswordForm'])->name('forgot.password');


//Route Page
// Route::middleware(['auth'])->group(function () {
//     Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
// });

// Route Admin
Route::get('admindashboard', [DashboardController::class, 'admin'])->name('dashboard');
Route::get('users', [UsersController::class, 'index'])->name('users');
Route::get('detail', [UsersController::class, 'detail'])->name('detailusers');
Route::get('recenthistory', [RecentHistoryController::class, 'index'])->name('Recent History');
Route::get('detailhistory', [RecentHistoryController::class, 'detail'])->name('detailhistory');
Route::get('report', [ReportController::class, 'index'])->name(('report'));
Route::get('adminprofile', [AdminProfileController::class, 'index'])->name(('adminprofile'));

// Route Users
Route::get('usersdashboard', [DashboardController::class, 'users'])->name('dashboard');
Route::get('usersreport', [ReportController::class, 'users'])->name(('report'));
Route::get('userprofile', [UsersProfileController::class, 'index'])->name(('userprofile'));
Route::get('attendanceform', [AttendanceController::class, 'index'])->name(('attendanceform'));