<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\AdminController;

// Public Routes
Route::get('/', [AuthController::class, 'showLogin'])->name('login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin-login.submit');
Route::get('/register', [AuthController::class, 'showRegister'])->name('admin-register');
Route::post('/register', [AuthController::class, 'register'])->name('admin-register.submit');
Route::post('/verify-otp', [AuthController::class, 'verifyOtp'])->name('admin-register.verify-otp');

// Admin Protected Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin-dashboard');
    Route::get('/package-details', function () {
        return view('backend.pages.packagedetails');
    })->name('admin-package-details');
});
