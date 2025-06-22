<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

Route::get('/', function () {
    return view('backend.pages.dashboard');
})->name('admin-dashboard');

Route::get('/package-details', function () {
    return view('backend.pages.packagedetails');
})->name('admin-package-details');

Route::get('/admin-dashboard', function () {
    return view('backend.pages.dashboard');
})->name('admin-dashboard');

Route::get('/admin-package-details', function () {
    return view('backend.pages.packagedetails');
})->name('admin-package-details');

Route::get('/admin-support', function () {
    return view('backend.pages.support');
})->name('admin-support');

Route::get('/admin-level-settings', function () {
    return view('backend.pages.levelsettings');
})->name('admin-level-settings');

Route::get('/admin-deduct-fund', function () {
    return view('backend.pages.deductfund');
})->name('admin-deduct-fund');

Route::get('/admin-deduction-report', function () {
    return view('backend.pages.deductionreport');
})->name('admin-deduction-report');

Route::get('/admin-transfer-fund', function () {
    return view('backend.pages.transferfund');
})->name('admin-transfer-fund');

Route::get('/admin-transfer-report', function () {
    return view('backend.pages.transferreport');
})->name('admin-transfer-report');

Route::get('/verify-otp', function () {
    return view('backend.auth.verify-otp');
})->name('verify-otp');

Route::get('/register', [AuthController::class, 'showRegister'])->name('admin-register');
Route::post('/register', [AuthController::class, 'register'])->name('admin-register.submit');
Route::post('/verify-otp', [AuthController::class, 'verifyOtp'])->name('admin-register.verify-otp');

