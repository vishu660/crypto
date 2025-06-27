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
    return view('backend.pages.user');
})->name('user');


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
Route::get('/user/pages/blank', function () { return view('user.pages.blank'); })->name('user.pages.blank');
Route::get('/user/pages/email', function () { return view('user.pages.email'); })->name('user.pages.email');
Route::get('/user/pages/exchange', function () { return view('user.pages.exchange'); })->name('user.pages.exchange');
Route::get('/user/pages/faq', function () { return view('user.pages.faq'); })->name('user.pages.faq');
Route::get('/user/pages/investment', function () { return view('user.pages.investment'); })->name('user.pages.investment');
Route::get('/user/pages/mailDetails', function () { return view('user.pages.mailDetails'); })->name('user.pages.mailDetails');
Route::get('/user/pages/market', function () { return view('user.pages.market'); })->name('user.pages.market');
Route::get('/user/pages/notification', function () { return view('user.pages.notification'); })->name('user.pages.notification');
Route::get('/user/pages/profile', function () { return view('user.pages.profile'); })->name('user.pages.profile');
Route::get('/user/pages/support', function () { return view('user.pages.support'); })->name('user.pages.support');
Route::get('/user/pages/terms-condition', function () { return view('user.pages.terms&condition'); })->name('user.pages.terms-condition');
Route::get('/user/pages/transactions', function () { return view('user.pages.transactions'); })->name('user.pages.transactions');
Route::get('/user/pages/transfer', function () { return view('user.pages.transfer'); })->name('user.pages.transfer');
Route::get('/user/pages/wallet', function () { return view('user.pages.wallet'); })->name('user.pages.wallet');

// User Pages Components
Route::get('/user/pages/components/advancedFrom', function () { return view('user.pages.components.advancedFrom'); })->name('user.pages.components.advancedFrom');
Route::get('/user/pages/components/advancedTable', function () { return view('user.pages.components.advancedTable'); })->name('user.pages.components.advancedTable');
Route::get('/user/pages/components/alerts', function () { return view('user.pages.components.alerts'); })->name('user.pages.components.alerts');
Route::get('/user/pages/components/ammCharts', function () { return view('user.pages.components.ammCharts'); })->name('user.pages.components.ammCharts');
Route::get('/user/pages/components/apexCharts', function () { return view('user.pages.components.apexCharts'); })->name('user.pages.components.apexCharts');
Route::get('/user/pages/components/badges', function () { return view('user.pages.components.badges'); })->name('user.pages.components.badges');
Route::get('/user/pages/components/basicForm', function () { return view('user.pages.components.basicForm'); })->name('user.pages.components.basicForm');
Route::get('/user/pages/components/basicTable', function () { return view('user.pages.components.basicTable'); })->name('user.pages.components.basicTable');
Route::get('/user/pages/components/buttons', function () { return view('user.pages.components.buttons'); })->name('user.pages.components.buttons');
Route::get('/user/pages/components/calender', function () { return view('user.pages.components.calender'); })->name('user.pages.components.calender');
Route::get('/user/pages/components/cards', function () { return view('user.pages.components.cards'); })->name('user.pages.components.cards');
Route::get('/user/pages/components/chartjs', function () { return view('user.pages.components.chartjs'); })->name('user.pages.components.chartjs');
Route::get('/user/pages/components/createInvoice', function () { return view('user.pages.components.createInvoice'); })->name('user.pages.components.createInvoice');
Route::get('/user/pages/components/eCharts', function () { return view('user.pages.components.eCharts'); })->name('user.pages.components.eCharts');
Route::get('/user/pages/components/editor', function () { return view('user.pages.components.editor'); })->name('user.pages.components.editor');
Route::get('/user/pages/components/invoice', function () { return view('user.pages.components.invoice'); })->name('user.pages.components.invoice');
Route::get('/user/pages/components/listGroup', function () { return view('user.pages.components.listGroup'); })->name('user.pages.components.listGroup');
Route::get('/user/pages/components/map', function () { return view('user.pages.components.map'); })->name('user.pages.components.map');
Route::get('/user/pages/components/modals', function () { return view('user.pages.components.modals'); })->name('user.pages.components.modals');
Route::get('/user/pages/components/pagination', function () { return view('user.pages.components.pagination'); })->name('user.pages.components.pagination');
Route::get('/user/pages/components/progress', function () { return view('user.pages.components.progress'); })->name('user.pages.components.progress');
Route::get('/user/pages/components/spinners', function () { return view('user.pages.components.spinners'); })->name('user.pages.components.spinners');
Route::get('/user/pages/components/timeline', function () { return view('user.pages.components.timeline'); })->name('user.pages.components.timeline');

// User Pages Authentication
Route::get('/user/pages/authentication/404', function () { return view('user.pages.authentication.404'); })->name('user.pages.authentication.404');
Route::get('/user/pages/authentication/505', function () { return view('user.pages.authentication.505'); })->name('user.pages.authentication.505');
Route::get('/user/pages/authentication/forgetPassword', function () { return view('user.pages.authentication.forgetPassword'); })->name('user.pages.authentication.forgetPassword');
Route::get('/user/pages/authentication/lockscreen', function () { return view('user.pages.authentication.lockscreen'); })->name('user.pages.authentication.lockscreen');
Route::get('/user/pages/authentication/signIn', function () { return view('user.pages.authentication.signIn'); })->name('user.pages.authentication.signIn');
Route::get('/user/pages/authentication/signUp', function () { return view('user.pages.authentication.signUp'); })->name('user.pages.authentication.signUp');

// User Layout
Route::get('/user/user_layout', function () { return view('user.user_layout'); })->name('user.user_layout');

