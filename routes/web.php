<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Backend\FundRequestController;
use App\Http\Controllers\Backend\FundDeductionController;
use App\Http\Controllers\Backend\FundTransferController;

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

// Fund Deduction Routes
Route::get('/admin-deduct-fund', [FundDeductionController::class, 'deductFund'])->name('admin-deduct-fund');
Route::get('/admin-deduction-report', [FundDeductionController::class, 'deductionReport'])->name('admin-deduction-report');
Route::get('/admin/all-deductions', [FundDeductionController::class, 'allDeductions'])->name('admin.deductions.all');
Route::get('/admin/manual-deduction', [FundDeductionController::class, 'manualDeduction'])->name('admin.deductions.manual');
Route::post('/admin/store-deduction', [FundDeductionController::class, 'storeDeduction'])->name('admin.deductions.store');
Route::get('/admin/get-deduction-data', [FundDeductionController::class, 'getDeductionData'])->name('admin.deductions.data');

// Fund Transfer Routes
Route::get('/admin-transfer-fund', [FundTransferController::class, 'transferFund'])->name('admin-transfer-fund');
Route::get('/admin-transfer-report', [FundTransferController::class, 'transferReport'])->name('admin-transfer-report');
Route::get('/admin/transfer-history', [FundTransferController::class, 'transferHistory'])->name('admin.transfers.history');
Route::get('/admin/new-transfer', [FundTransferController::class, 'newTransfer'])->name('admin.transfers.new');
Route::post('/admin/store-transfer', [FundTransferController::class, 'storeTransfer'])->name('admin.transfers.store');
Route::get('/admin/get-transfer-data', [FundTransferController::class, 'getTransferData'])->name('admin.transfers.data');
Route::get('/admin/get-member-balance', [FundTransferController::class, 'getMemberBalance'])->name('admin.transfers.balance');

Route::get('/verify-otp', function () {
    return view('backend.auth.verify-otp');
})->name('verify-otp');

Route::get('/register', [AuthController::class, 'showRegister'])->name('admin-register');
Route::post('/register', [AuthController::class, 'register'])->name('admin-register.submit');
Route::post('/verify-otp', [AuthController::class, 'verifyOtp'])->name('admin-register.verify-otp');

Route::get('/admin/all-fund-requests', [FundRequestController::class, 'allRequests'])->name('admin.fund-requests.all');
Route::get('/admin/approved-fund-requests', [FundRequestController::class, 'approvedRequests'])->name('admin.fund-requests.approved');
Route::get('/admin/pending-fund-requests', [FundRequestController::class, 'pendingRequests'])->name('admin.fund-requests.pending');

