<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthController;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Backend\FundRequestController;
use App\Http\Controllers\Backend\FundDeductionController;
use App\Http\Controllers\Backend\FundTransferController;
use App\Http\Controllers\Backend\MemberController;



// // Public Routes
// Route::get('/', [AuthController::class, 'showLogin'])->name('login');
// Route::post('/admin/login', [AuthController::class, 'login'])->name('admin-login.submit');


// Public Routes
Route::get('/', function () {
    return view('index');
})->name('index');





Route::get('/admin-dashboard', function () {
    return view('backend.pages.dashboard');
})->name('admin-dashboard');


Route::get('/admin-dashboard', function () {
    return view('backend.pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin/dashboard', function () {
    return view('backend.pages.dashboard');
})->name('admin-dashboard');

Route::get('/user/dashboard', function () {
    return view('backend.pages.user_dashboard');
})->name('user-dashboard');

Route::get('/admin/register', [RegisteredUserController::class, 'create'])->name('admin-register');
Route::post('/admin/register', [RegisteredUserController::class, 'store'])->name('admin-register.submit');

Route::get('/admin/support', function () {
    return view('backend.pages.support');
})->name('admin-support');

Route::get('/admin/package-details', function () {
    return view('backend.pages.packagedetails');
})->name('admin-package-details');

Route::get('/admin/level-settings', function () {
    return view('backend.pages.levelsettings');
})->name('admin-level-settings');

Route::get('/admin/all-fund-requests', function () {
    return view('backend.pages.all_fund_requests');
})->name('admin.fund-requests.all');

Route::get('/admin/approved-fund-requests', function () {
    return view('backend.pages.approved_fund_requests');
})->name('admin.fund-requests.approved');

Route::get('/admin/pending-fund-requests', function () {
    return view('backend.pages.pending_fund_requests');
})->name('admin.fund-requests.pending');

Route::get('/admin/deduction-report', function () {
    return view('backend.pages.deductionreport');
})->name('admin-deduction-report');

Route::get('/admin/transfer-report', function () {
    return view('backend.pages.transferreport');
})->name('admin-transfer-report');

Route::get('/admin/deduct-fund', function () {
    return view('backend.pages.deductfund');
})->name('admin-deduct-fund');

Route::get('/admin/transfer-fund', function () {
    return view('backend.pages.transferfund');
})->name('admin-transfer-fund');

Route::get('/admin/all-deductions', function () {
    return view('backend.pages.deductionreport');
})->name('admin.deductions.all');

Route::get('/admin/manual-deduction', function () {
    return view('backend.pages.deductionreport');
})->name('admin.deductions.manual');

Route::get('/admin/transfer-history', function () {
    return view('backend.pages.transferreport');
})->name('admin.transfers.history');

Route::get('/admin/new-transfer', function () {
    return view('backend.pages.transferfund');
})->name('admin.transfers.new');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

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

// Route::get('/admin/settings', function () {
//     return view('backend.pages.settings');
// })->name('admin.settings');


