<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Backend\FundRequestController;

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

Route::get('/verify-otp', function () {
    return view('backend.auth.verify-otp');
})->name('verify-otp');

Route::get('/register', [AuthController::class, 'showRegister'])->name('admin-register');
Route::post('/register', [AuthController::class, 'register'])->name('admin-register.submit');
Route::post('/verify-otp', [AuthController::class, 'verifyOtp'])->name('admin-register.verify-otp');

Route::get('/admin/all-fund-requests', [FundRequestController::class, 'allRequests'])->name('admin.fund-requests.all');
Route::get('/admin/approved-fund-requests', [FundRequestController::class, 'approvedRequests'])->name('admin.fund-requests.approved');
Route::get('/admin/pending-fund-requests', [FundRequestController::class, 'pendingRequests'])->name('admin.fund-requests.pending');

