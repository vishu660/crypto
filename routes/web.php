<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

Route::get('/', function () {
    return view('backend.layouts.admin');
})->name('admin-dashboard');





Route::get('/register', [AuthController::class, 'showRegister'])->name('admin-register');
Route::post('/register', [AuthController::class, 'register'])->name('admin-register.submit');
Route::post('/verify-otp', [AuthController::class, 'verifyOtp'])->name('admin-register.verify-otp');

