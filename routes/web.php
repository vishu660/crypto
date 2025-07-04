<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthController;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Backend\FundRequestController;
use App\Http\Controllers\Backend\FundDeductionController;
use App\Http\Controllers\Backend\FundTransferController;
use App\Http\Controllers\Backend\MemberController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\MailController;
use App\Http\Controllers\Admin\WalletController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\SalaryController;
use App\Http\Controllers\Api\KycApiController;




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




Route::get('/admin/register', [RegisteredUserController::class, 'create'])->name('admin-register');
Route::post('/admin/register', [RegisteredUserController::class, 'store'])->name('admin-register.submit');
Route::get('/register/{referralCode?}', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register');
Route::get('/verify-otp', [AuthenticatedSessionController::class, 'showOtpForm'])->name('verify-otp');
Route::post('/verify-otp', [AuthenticatedSessionController::class, 'verifyOtp'])->name('verify-otp.post');


Route::get('/admin/support', function () {
    return view('backend.pages.support');
})->name('admin-support');

Route::get('/admin/package-details', [PackageController::class, 'index'])->name('admin-package-details');

// Route::get('/admin/level-settings', function () {
//     $users = \App\Models\User::all();
//     $salaries = $users->map(function($user) {
//         return (object)[
//             'full_name' => $user->full_name,
//             'email' => $user->email,
//             'salary' => property_exists($user, 'salary') ? $user->salary : 0, // 0 if no salary column
//             'referral_count' => \App\Models\User::where('referral_by', $user->id)->count(),
//         ];
//     });
//     return view('backend.pages.levelsettings', compact('salaries'));
// })->name('admin-level-settings');

Route::get('/admin/all-fund-requests', [TransactionController::class, 'index'])->name('admin.fund-requests.all');

Route::get('/admin/approved-fund-requests', [FundRequestController::class, 'approvedRequests'])->name('admin.fund-requests.approved');

Route::get('/admin/pending-fund-requests', [FundRequestController::class, 'pendingRequests'])->name('admin.fund-requests.pending');

Route::get('/admin/failed-fund-requests', [FundRequestController::class, 'failedRequests'])->name('admin.fund-requests.failed');

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

// Add the missing store route for fund transfers
Route::post('/admin/transfers', [FundTransferController::class, 'storeTransfer'])->name('admin.transfers.store');

// Route::middleware('auth')->group(function () {
//     Route::get('/admin/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/admin/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/admin/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

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

Route::get('admin/wallet-history', [WalletController::class, 'index'])->name('admin.wallethistory');

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
Route::get('/admin/e-pin', [App\Http\Controllers\Admin\TransactionController::class, 'epinPage'])->name('admin.e_pin');
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


Route::middleware(['auth'])->prefix('admin')->group(function () {
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('admin.profile.update');
    // Route::post('package-details', [PackageController::class, 'store'])->name('package.store');

});

// Show package list page
Route::get('/admin/package-details', [PackageController::class, 'index'])->name('admin-package-details');

// Save package (POST)
Route::post('/admin/package', [PackageController::class, 'store'])->name('package.store');

// Edit form
Route::get('/admin/package/{id}/edit', [PackageController::class, 'edit'])->name('package.edit');

// Update form
Route::put('/admin/package/{id}', [PackageController::class, 'update'])->name('package.update');

// Delete
Route::delete('/admin/package/{id}', [PackageController::class, 'destroy'])->name('package.destroy');

// web.php

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/mail/compose', [MailController::class, 'create'])->name('admin.mail.compose');
    Route::post('/mail/send', [MailController::class, 'store'])->name('admin.mail.send');
    Route::get('/mail/inbox', [MailController::class, 'inbox'])->name('admin.mail.inbox');
    Route::get('/mail/sent', [MailController::class, 'sent'])->name('admin.mail.sent');
});




// user deshbord 

// User Pages
Route::get('/user/pages/activity', function () { return view('user.pages.activity'); })->name('user.pages.activity');
Route::get('/user/pages/blank', [UserController::class, 'blank'])->name('user.pages.blank');
Route::get('/user/pages/email', function () { return view('user.pages.email'); })->name('user.pages.email');
Route::get('/user/pages/exchange', function () { return view('user.pages.exchange'); })->name('user.pages.exchange');
Route::get('/user/pages/plans', function () { return view('user.pages.plans'); })->name('user.pages.plans');
Route::get('/user/pages/mailDetails', function () { return view('user.pages.mailDetails'); })->name('user.pages.mailDetails');
Route::get('/user/pages/market', function () { return view('user.pages.market'); })->name('user.pages.market');
Route::get('/user/pages/notification', function () { return view('user.pages.notification'); })->name('user.pages.notification');
Route::get('/user/pages/profile', [UserController::class, 'profile'])->name('user.pages.profile');
Route::get('/user/pages/profile/{role}', [UserController::class, 'getUsersByRole'])->name('user.pages.profile.by.role');
Route::get('/user/pages/support', function () { return view('user.pages.support'); })->name('user.pages.support');
Route::get('/user/pages/transactions', [UserController::class, 'userTransactions'])->name('user.pages.transactions');
Route::get('/user/pages/transfer', [UserController::class, 'transfer'])->name('user.pages.transfer');
Route::get('/user/pages/wallet', [UserController::class, 'wallet'])->name('user.pages.wallet')->middleware('auth');
Route::get('/user/pages/activation', [UserController::class, 'activation'])->name('user.pages.activation');



// User Pages Authentication
Route::get('/user/pages/authentication/404', function () { return view('user.pages.authentication.404'); })->name('user.pages.authentication.404');
Route::get('/user/pages/authentication/505', function () { return view('user.pages.authentication.505'); })->name('user.pages.authentication.505');
Route::get('/user/pages/authentication/forgetPassword', function () { return view('user.pages.authentication.forgetPassword'); })->name('user.pages.authentication.forgetPassword');
Route::get('/user/pages/authentication/lockscreen', function () { return view('user.pages.authentication.lockscreen'); })->name('user.pages.authentication.lockscreen');
Route::get('/user/pages/authentication/signIn', function () { return view('user.pages.authentication.signIn'); })->name('user.pages.authentication.signIn');
Route::get('/user/pages/authentication/signUp', function () { return view('user.pages.authentication.signUp'); })->name('user.pages.authentication.signUp');

// User Layout
Route::get('/user_layout', function () { return view('user.user_layout'); })->name('user.user_layout');


// Route::get('/admin/salary', function () {
//     return view('backend.pages.salary');
// })->name('admin-salary');

Route::get('/admin/wallet-balance', function () {
    return view('backend.pages.walletbalance');
})->name('admin.walletbalance');

// Route::get('/user_layout', function () {
//     return view('user.user_layout'); 
// })->name('user');;

// Route::get('/user/dashboard', function () {
//     return view('user.user_layout');
// })->name('user');

Route::get('/user', [UserController::class, 'dashboard'])->middleware('auth')->name('user');
Route::post('/packages/buy', [UserController::class, 'buy'])->middleware('auth')->name('packages.buy');
Route::get('/packages/buy', function() {
    return redirect()->route('user')->with('error', 'Please use the Buy button to purchase packages.');
})->name('packages.buy.get');
Route::match(['get', 'post'], '/admin/transactions/{id}/approve', [TransactionController::class, 'approve'])->name('admin.transactions.approve');
Route::post('/admin/transactions/{id}/reject', [TransactionController::class, 'reject'])->name('admin.transactions.reject');

Route::get('/admin/transactions', [TransactionController::class, 'index'])->name('admin.transactions.index');


// Route::get('/admin/salary-report', [SalaryController::class, 'index'])->name('admin.salary.index');
// Route::put('/admin/series-salary-update', [SalaryController::class, 'update'])->name('admin.series.salary.update');
// Route::put('/admin/series-update/{user}', [SalaryController::class, 'updateLevel'])->name('admin.series.update');
// Route::get('/admin/series-salary/create', [SalaryController::class, 'create'])->name('admin.series.salary.create');
// Route::post('/admin/series-salary/store', [SalaryController::class, 'store'])->name('admin.series.salary.store');



Route::get('/admin/salary-report', [SalaryController::class, 'index'])->name('admin.series.salary.index');
// ✅ Correct
Route::put('/admin/series-salary-update', [SalaryController::class, 'update'])->name('admin.series.salary.update');
Route::put('/admin/series-update/{user}', [SalaryController::class, 'updateLevel'])->name('admin.series.update');
Route::get('/admin/series-salary/create', [SalaryController::class, 'create'])->name('admin.series.salary.create');
Route::post('/admin/series-salary/store', [SalaryController::class, 'store'])->name('admin.series.salary.store');


// Show Buy Page
Route::get('/user/buy/{id}', [UserController::class, 'showBuyPage'])->name('user.buy');

// Buy with Admin Code
Route::post('/user/buy/code', [UserController::class, 'buyWithCode'])->name('packages.buy.with-code');

// Buy with Admin Request
Route::post('/user/buy/request', [UserController::class, 'buyWithRequest'])->name('packages.buy.with-request');

Route::post('/user/profile/update', [UserController::class, 'updateProfile'])->name('user.profile.update');
Route::post('/user/profile/bank', [UserController::class, 'updateBank'])->name('user.profile.bank.update');
Route::post('/user/profile/contact', [UserController::class, 'updateContact'])->name('user.profile.contact.update');
Route::post('/user/profile/kyc', [UserController::class, 'updateKyc'])->name('user.profile.kyc.update');

Route::get('/user/kyc', [UserController::class, 'kycForm'])->name('user.kyc.form');
Route::post('/user/kyc', [UserController::class, 'kycSubmit'])->name('user.kyc.submit');
Route::middleware('auth:sanctum')->post('/kyc-submit', [KycApiController::class, 'submit']);
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
Route::post('admin/referral-setting', [SalaryController::class, 'updateReferralSetting'])->name('admin.referral.setting.update');
Route::get('/admin/profile', [UserController::class, 'profile'])->name('admin.profile');
// For E-Pin
Route::get('/admin/epin/transfer', [TransactionController::class, 'epinTransfer'])->name('epin.transfer');
Route::get('/admin/epin/purchase', [TransactionController::class, 'epinPurchase'])->name('epin.purchase');
Route::get('/epin', [TransactionController::class, 'epinIndex'])->name('epin.index');
Route::post('/epin/purchase', [TransactionController::class, 'epinPurchaseSubmit'])->name('epin.purchase.submit');
Route::post('/admin/epin/transfer', [App\Http\Controllers\Admin\TransactionController::class, 'epinTransferSubmit'])->name('admin.epin.transfer.submit');
Route::post('/admin/epin/purchase', [App\Http\Controllers\Admin\TransactionController::class, 'epinPurchaseSubmit'])->name('admin.epin.purchase.submit');
Route::get('/admin/user-search', [AdminController::class, 'userSearch'])->name('admin.user.search');
