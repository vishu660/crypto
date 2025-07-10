<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthController;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Admin\FundRequestController;
use App\Http\Controllers\Backend\FundDeductionController;
use App\Http\Controllers\Backend\FundTransferController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\MailController;
use App\Http\Controllers\Admin\WalletController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\SalaryController;
use App\Http\Controllers\Admin\KycController;
use App\Http\Controllers\Admin\AddressController;
use App\Http\Controllers\Admin\UserUsdtApprovalController;
use App\Http\Controllers\User\UserUsdtController;
use App\Http\Controllers\NowPaymentController;




// // Public Routes
// Route::get('/', [AuthController::class, 'showLogin'])->name('login');
// Route::post('/admin/login', [AuthController::class, 'login'])->name('admin-login.submit');

// api route 
Route::post('/nowpayments/payment', [NowPaymentController::class, 'createPayment'])->name('nowpayment.create');
Route::post('/nowpayments/callback', [NowPaymentController::class, 'callback'])->name('nowpayment.callback');

// Public Routes
Route::get('/', function () {
    return view('index');
})->name('index');





// Route::get('/admin-dashboard', function () {
//     return view('backend.pages.dashboard');
// })->name('admin-dashboard');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');



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
Route::post('/packages/toggle-status/{id}', [PackageController::class, 'toggleStatus'])->name('package.toggleStatus');

// web.php
Route::get('user/breakdown/{id}', [PackageController::class, 'show'])->name('user.breakdown.show');
Route::get('/user/pages/email', [\App\Http\Controllers\Admin\MailController::class, 'emailInbox'])->name('user.pages.email');


Route::middleware(['auth'])->group(function () {
    Route::post('/user/buy/{id}', [PackageController::class, 'buy'])->name('user.package.buy');
    Route::post('/user/buy/code', [PackageController::class, 'buyWithCode'])->name('user.package.buyWithCode');
    Route::post('/user/buy/request', [PackageController::class, 'buyWithRequest'])->name('user.package.buyWithRequest');
});



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



require __DIR__.'/auth.php';

// Activation Routes
Route::get('/admin/wallet-activation', function () {
    return view('backend.pages.walletactivation');
})->name('admin.wallet-activation');
Route::get('/admin/activation-report', function () {
    return view('backend.pages.activationreport');
})->name('admin.activation-report');

// Route::get('/admin/all-members', [MemberController::class, 'index'])->name('admin.all-members');
Route::get('/admin/all-members', [\App\Http\Controllers\Admin\AdminController::class, 'allMembers'])->name('admin.all-members');
// Route::get('/admin/active-members', [MemberController::class, 'activeMembers'])->name('admin.active-members');
Route::get('/admin/active-members', [\App\Http\Controllers\Admin\AdminController::class, 'activeMembers'])->name('admin.active-members');
// Route::get('/admin/inactive-members', [MemberController::class, 'inactiveMembers'])->name('admin.inactive-members');
Route::get('/admin/inactive-members', [\App\Http\Controllers\Admin\AdminController::class, 'inactiveMembers'])->name('admin.inactive-members');
// Route::get('/admin/blocked-members', [MemberController::class, 'blockedMembers'])->name('admin.blocked-members');
Route::get('/admin/blocked-members', [\App\Http\Controllers\Admin\AdminController::class, 'blockedMembers'])->name('admin.blocked-members');
// Route::get('/admin/password-details', [MemberController::class, 'passwordDetails'])->name('admin.password-details');
Route::get('/admin/password-details', [\App\Http\Controllers\Admin\AdminController::class, 'passwordDetails'])->name('admin.password-details');



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




Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::patch('/profile', [ProfileController::class, 'update'])->name('admin.profile.update');
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
Route::get('/user/pages/activity', [UserController::class, 'userTransactions'])
    ->middleware('auth')
    ->name('user.pages.activity');
Route::get('/user/pages/blank', [UserController::class, 'blank'])->name('user.pages.blank');
Route::get('/user/pages/email', function () { return view('user.pages.email'); })->name('user.pages.email');
Route::get('/user/pages/exchange', function () { return view('user.pages.exchange'); })->name('user.pages.exchange');
Route::get('/user/pages/plans', function () {
    $packages = \App\Models\Package::all();
    return view('user.pages.plans', compact('packages'));
})->name('user.pages.plans');
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
Route::get('/user/pages/bank', function () {
    return view('user.pages.bank');
})->name('user.pages.bank');
Route::match(['get', 'post'], '/user/pages/kyc-step1-new', function () {
    // ...handle POST data if needed...
    return view('user.pages.kyc_step1_new');
})->name('user.pages.kyc_step1_new');
Route::get('/user/pages/document-verification', function () {
    return view('user.pages.document_verification');
})->name('user.pages.document_verification');
Route::get('/user/pages/share-pan', function () {
    return view('user.pages.share_pan');
})->name('user.pages.share_pan');
Route::get('/user/pages/verification-to-kyc', function () {
    return view('user.pages.verification_to_kyc');
})->name('user.pages.verification_to_kyc');



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


Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
Route::post('admin/referral-setting', [SalaryController::class, 'updateReferralSetting'])->name('admin.referral.setting.update');
Route::get('/admin/profile', [UserController::class, 'profile'])->name('admin.profile');
// For E-Pin
Route::get('/admin/epin/transfer', [TransactionController::class, 'epinTransfer'])->name('epin.transfer');
Route::post('/epin/purchase', [TransactionController::class, 'epinPurchaseSubmit'])->name('epin.purchase.submit');
Route::get('/epin', [TransactionController::class, 'epinIndex'])->name('epin.index');
Route::post('/epin/purchase', [TransactionController::class, 'epinPurchaseSubmit'])->name('epin.purchase.submit');
Route::post('/admin/epin/transfer', [App\Http\Controllers\Admin\TransactionController::class, 'epinTransferSubmit'])->name('admin.epin.transfer.submit');
Route::post('/admin/epin/purchase', [App\Http\Controllers\Admin\TransactionController::class, 'epinPurchaseSubmit'])->name('admin.epin.purchase.submit');
Route::get('/admin/user-search', [AdminController::class, 'userSearch'])->name('admin.user.search');

// User DigiLocker redirect
Route::get('/digilocker-auth-complete', [KycController::class, 'digilockerCallback'])->name('digilocker.auth.complete');


// saveBankDetails
Route::post('/user/bank/save', [UserController::class, 'saveBankDetails'])->name('user.bank.save');

// Route::post('/admin/bank/approve/{id}', [UserController::class, 'approveBank'])->name('admin.bank_approve');
// // Route::get('admin/bank-requests', [UserController::class, 'bankRequests'])->name('admin.bank_requests');
// Route::get('/admin/bank-requests', [UserController::class, 'bankRequests'])->name('admin.bank');
Route::get('/user/withdrawal', [UserController::class, 'showWithdrawalForm'])->name('user.withdrawal');
Route::get('/admin/user/{user}/transactions', [UserController::class, 'userTransactions'])->name('admin.user.transactions');

Route::get('/user/withdrawal', function () {
    $user = auth()->user();
    return view('user.pages.withdrawal', compact('user'));
})->middleware('auth')->name('withdraw.create');

Route::get('/user/payouts', function () {
    $user = auth()->user();
    $withdraws = \App\Models\Withdraw::where('user_id', $user->id)
                ->where('status', 'approved')
                ->latest()
                ->paginate(10);
    return view('user.pages.payouts', compact('withdraws'));
})->middleware('auth')->name('user.payouts');

Route::get('/admin/kyc-requests', [KycController::class, 'kycRequests'])->name('admin.kyc.requests');

// Approve KYC request
Route::post('/admin/kyc-approve/{id}', [KycController::class, 'approve'])->name('admin.kyc.approve');
// Reject KYC request
Route::post('/admin/kyc-reject/{id}', [KycController::class, 'reject'])->name('admin.kyc.reject');

// user withdrawSubmit

Route::post('/user/withdraw-submit', [UserController::class, 'withdrawSubmit'])->name('user.withdraw.submit');

// Show all withdrawal requests (admin panel)
Route::get('/admin/withdraw-requests', [AdminController::class, 'withdrawRequests'])->name('admin.withdraw.requests');

// Approve specific withdrawal
Route::post('/admin/withdraw-approve/{id}', [AdminController::class, 'approveWithdraw'])->name('admin.withdraw.approve');

// Reject specific withdrawal
Route::post('/admin/withdraw-reject/{id}', [AdminController::class, 'rejectWithdraw'])->name('admin.withdraw.reject');

Route::post('user/change-password', [UserController::class, 'changePassword'])->name('user.change.password');
Route::post('user/change-transaction-password', [UserController::class, 'changeTransactionPassword'])->name('user.change.txnpassword');

Route::get('/my-withdraws', [UserController::class, 'myWithdraws'])->name('user.withdraws');

// Admin withdrawal routes
Route::get('/admin/withdraw-requests', [AdminController::class, 'withdrawRequests'])->name('admin.withdraw.requests');
Route::get('/admin/unpaid-payouts', [AdminController::class, 'withdrawList'])->name('admin.unpaidpayouts');
Route::get('/admin/paid-payouts', [AdminController::class, 'paidPayouts'])->name('admin.paidpayouts');
Route::get('/admin/rejected-payouts', [AdminController::class, 'rejectedPayouts'])->name('admin.rejectedpayouts');
Route::post('/admin/withdraw-approve/{id}', [AdminController::class, 'approveWithdraw'])->name('admin.withdraw.approve');
Route::post('/admin/withdraw-reject/{id}', [AdminController::class, 'rejectWithdraw'])->name('admin.withdraw.reject');

Route::post('/profile/update', [UserController::class, 'updateProfile'])->name('user.profile.update');

Route::get('/user/available-epins', [App\Http\Controllers\Admin\UserController::class, 'availableEpins'])->middleware('auth')->name('available_epins');
Route::get('/user/applied-epins', [App\Http\Controllers\Admin\UserController::class, 'appliedEpins'])->middleware('auth')->name('applied_epins');

Route::get('/user/total-earnings', [App\Http\Controllers\Admin\UserController::class, 'totalEarnings'])->middleware('auth')->name('total_earnings');
Route::get('/user/refer-bonus', [App\Http\Controllers\Admin\UserController::class, 'referBonus'])->middleware('auth')->name('refer_bonus');
Route::get('/user/level-bonus', [App\Http\Controllers\Admin\UserController::class, 'levelBonus'])->middleware('auth')->name('level_bonus');
Route::get('/user/matching-bonus', [App\Http\Controllers\Admin\UserController::class, 'matchingBonus'])->middleware('auth')->name('matching_bonus');
// Route::get('/user/tree-view', [App\Http\Controllers\Admin\UserController::class, 'treeView'])->middleware('auth')->name('tree_view');
// Route::get('/user/tree-view', [UserController::class, 'treeView'])->name('user.tree_view');
Route::get('/user/tree-view', [UserController::class, 'treeView'])->name('tree_view');

// Route::get('/tree-view', [UserController::class, 'treeView'])->name('tree_view');

Route::get('/user/referral-list', [App\Http\Controllers\Admin\UserController::class, 'referralList'])->middleware('auth')->name('referral_list');
Route::get('/user/downline-team', [App\Http\Controllers\Admin\UserController::class, 'downlineTeam'])->middleware('auth')->name('downline_team');

Route::get('/user/fund-request', [App\Http\Controllers\Admin\UserController::class, 'newFundRequest'])->middleware('auth')->name('fund_request.create');
Route::post('user/fund-request/store', [UserController::class, 'storeFundRequest'])->name('user.fund_request.store');
Route::get('/user/fund-requests', [UserController::class, 'fundRequests'])->name('user.fund-requests');


Route::get('/admin/fund-requests', [FundRequestController::class, 'approvedRequests'])->name('admin.fund-requests.all');
Route::post('/admin/fund-requests/{id}/approve', [FundRequestController::class, 'approve'])->name('admin.fund-request.approve');
Route::post('/admin/fund-requests/{id}/reject', [FundRequestController::class, 'reject'])->name('admin.fund-request.reject');


    
    // // 🆕 Package Requests
    // Route::get('/admin/package-requests', [AdminController::class, 'allPackageRequests'])->name('package-requests.all');
    // Route::post('/admin/package-requests/{id}/approve', [AdminController::class, 'approvePackageRequest'])->name('package-requests.approve');
    // Route::post('/admin/package-requests/{id}/reject', [AdminController::class, 'rejectPackageRequest'])->name('package-requests.reject');
    // Route::get('/admin/package-requests/pending', [AdminController::class, 'pendingPackageRequests'])->name('package-requests.pending');

    
    Route::prefix('admin')->name('package-requests.')->group(function () {
        Route::get('/package-requests', [AdminController::class, 'allPackageRequests'])->name('all');
        Route::get('/package-requests/pending', [AdminController::class, 'pendingPackageRequests'])->name('pending');
        Route::get('/package-requests/approved', [AdminController::class, 'approvedPackageRequests'])->name('approved');
        Route::get('/package-requests/rejected', [AdminController::class, 'rejectedPackageRequests'])->name('rejected');
    
        // ✅ Remove extra /admin from below
        Route::post('/package-requests/approve/{id}', [AdminController::class, 'approve'])->name('approve');
        Route::post('/package-requests/reject/{id}', [AdminController::class, 'reject'])->name('reject');
    });
    
    Route::post('/admin/package', [PackageController::class, 'store'])->name('package.store');



    Route::post('/user/convert', [UserController::class, 'convert'])->name('user.convert');
    // Route::get('/user', [UserController::class, 'getPrices'])->name('user.live.prices');

    
    Route::prefix('admin')->group(function () {
        Route::get('/addresses', [AddressController::class, 'index'])->name('admin.addresses.index');
        Route::get('/addresses/create', [AddressController::class, 'create'])->name('admin.addresses.create');
        Route::post('/addresses', [AddressController::class, 'store'])->name('admin.addresses.store');
        Route::get('/addresses/{address}/edit', [AddressController::class, 'edit'])->name('admin.addresses.edit');
        Route::put('/addresses/{address}', [AddressController::class, 'update'])->name('admin.addresses.update');
        Route::delete('/addresses/{address}', [AddressController::class, 'destroy'])->name('admin.addresses.destroy');
    });
    Route::get('/user/pages/create', [UserUsdtController::class, 'createUsdtAddress'])->name('user.create.usdt');
    Route::post('/user/pages/store', [UserUsdtController::class, 'storeUsdtAddress'])->name('user.store.usdt');
    Route::get('/user/pages', [UserUsdtController::class, 'viewUsdtAddress'])->name('user.view.usdt');

    Route::get('/admin/user-addresses', [UserUsdtApprovalController::class, 'index'])->name('admin.user-addresses.index');
    Route::post('/admin/user-addresses/{userAddress}/approve', [UserUsdtApprovalController::class, 'approve'])->name('admin.user-addresses.approve');
    Route::post('/admin/user-addresses/{userAddress}/reject', [UserUsdtApprovalController::class, 'reject'])->name('admin.user-addresses.reject');


