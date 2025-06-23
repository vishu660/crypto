<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;

Route::get('/', function () {
    return view('welcome');
});


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
