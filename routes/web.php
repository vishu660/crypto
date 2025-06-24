<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

use App\Http\Controllers\Admin\AdminController;

// Public Routes
Route::get('/', [AuthController::class, 'showLogin'])->name('login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin-login.submit');

use App\Http\Controllers\Backend\FundRequestController;
use App\Http\Controllers\Backend\FundDeductionController;
use App\Http\Controllers\Backend\FundTransferController;
use App\Http\Controllers\Backend\MemberController;

Route::get('/admin-dashboard', function () {
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

// Admin Protected Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin-dashboard');
    Route::get('/package-details', function () {
        return view('backend.pages.packagedetails');
    })->name('admin-package-details');
});
Route::get('/admin/all-fund-requests', [FundRequestController::class, 'allRequests'])->name('admin.fund-requests.all');
Route::get('/admin/approved-fund-requests', [FundRequestController::class, 'approvedRequests'])->name('admin.fund-requests.approved');
Route::get('/admin/pending-fund-requests', [FundRequestController::class, 'pendingRequests'])->name('admin.fund-requests.pending');


// Activation Routes
Route::get('/admin/wallet-activation', function () {
    return view('backend.pages.walletactivation');
})->name('admin.wallet-activation');
Route::get('/admin/activation-report', function () {
    return view('backend.pages.activationreport');
})->name('admin.activation-report');

Route::get('/admin/all-members', [MemberController::class, 'index'])->name('admin.all-members');
Route::get('/admin/active-members', [MemberController::class, 'activeMembers'])->name('admin.active-members');
Route::get('/admin/inactive-members', [MemberController::class, 'inactiveMembers'])->name('admin.inactive-members');
Route::get('/admin/blocked-members', [MemberController::class, 'blockedMembers'])->name('admin.blocked-members');
Route::get('/admin/password-details', [MemberController::class, 'passwordDetails'])->name('admin.password-details');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/admin/referral-list', function () {
    return view('backend.pages.referrallist');
})->name('admin.referral-list');

Route::get('/admin/downline-list', function () {
    return view('backend.pages.downlinelist');
})->name('admin.downline-list');

Route::get('/admin/total-earnings', function () {
    return view('backend.pages.totalearnings');
})->name('admin.total-earnings');

Route::get('/admin/roi-income', function () {
    return view('backend.pages.roiincome');
})->name('admin.roi-income');

Route::get('admin/passive-income', function () {
    return view('backend.pages.passiveincome');
})->name('admin.passiveincome');

Route::get('admin/direct-income', function () {
    return view('backend.pages.directincome');
})->name('admin.directincome');

Route::get('admin/royalty', function () {
    return view('backend.pages.royalty');
})->name('admin.royalty');

Route::get('admin/rewards', function () {
    return view('backend.pages.rewards');
})->name('admin.rewards');

Route::get('admin/wallet-balance', function () {
    return view('backend.pages.walletbalance');
})->name('admin.walletbalance');

Route::get('admin/account-report', function () {
    return view('backend.pages.accountreport');
})->name('admin.accountreport');

Route::get('admin/account-details', function () {
    return view('backend.pages.accountdetails');
})->name('admin.accountdetails');

Route::get('admin/unpaid-payouts', function () {
    return view('backend.pages.unpaidpayouts');
})->name('admin.unpaidpayouts');

Route::get('admin/paid-payouts', function () {
    return view('backend.pages.paidpayouts');
})->name('admin.paidpayouts');

Route::get('admin/rejected-payouts', function () {
    return view('backend.pages.rejectedpayouts');
})->name('admin.rejectedpayouts');

Route::get('admin/member-income-block', function () {
    return view('backend.pages.memberincomeblock');
})->name('admin.memberincomeblock');

Route::get('/admin/holidays', function () {
    return view('backend.pages.holidays');
})->name('admin.holidays');

Route::get('/admin/systemsettings', function () {
    return view('backend.pages.systemsettings');
})->name('admin.systemsettings');

Route::get('/admin/payoutcontrols', function () {
    return view('backend.pages.payoutcontrols');
})->name('admin.payoutcontrols');

Route::get('/admin/news', function () {
    return view('backend.pages.news');
})->name('admin.news');

Route::get('/admin/promotionalfiles', function () {
    return view('backend.pages.promotionalfiles');
})->name('admin.promotionalfiles');

Route::get('/admin/profile', function () {
    return view('backend.pages.profile');
})->name('admin.profile');

Route::get('/admin/updatepassword', function () {
    return view('backend.pages.updatepassword');
})->name('admin.updatepassword');

Route::get('/admin/settings', function () {
    return view('backend.pages.settings');
})->name('admin.settings');


