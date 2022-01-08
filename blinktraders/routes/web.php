<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\KycController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Common\BlogController;
use App\Http\Controllers\User\InvestController;
use App\Http\Controllers\User\DepositController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\User\SecurityController;
use App\Http\Controllers\User\WithdrawController;
use App\Http\Controllers\User\PortfolioController;
use App\Http\Controllers\Admin\CopyTradeController;
use App\Http\Controllers\Auth\LoginAdminController;
use App\Http\Controllers\User\ActivitiesController;
use App\Http\Controllers\Admin\DepositLogController;
use App\Http\Controllers\Admin\InvestPlanController;
use App\Http\Controllers\User\DepositCodeController;
use App\Http\Controllers\User\KycDocumentController;
use App\Http\Controllers\User\MasterclassController;
use App\Http\Controllers\Admin\BlogArticleController;
use App\Http\Controllers\Admin\BlogPostNewController;
use App\Http\Controllers\Admin\WithdrawLogController;
use App\Http\Controllers\Auth\RegisterInitController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Auth\RegisterSubmitController;
use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\User\DepositTransactController;
use App\Http\Controllers\User\KycProofAddressController;
use App\Http\Controllers\User\KycSnapshortTakeController;
use App\Http\Controllers\User\WithdrawTransactController;
use App\Http\Controllers\Admin\MasterclassAdminController;
use App\Http\Controllers\User\KycSnapshortIntroController;
use App\Http\Controllers\Admin\BlogPostNewUpdateController;
use App\Http\Controllers\User\InvestPackTransactController;
use App\Http\Controllers\Admin\DepositPaymentgateController;
use App\Http\Controllers\Admin\SystemConfigSettingsController;
use App\Http\Controllers\Admin\InvestPlanTransactionController;
use App\Http\Controllers\Admin\SystemConfigAccountInfoController;
use App\Http\Controllers\User\InvestCopyTraderTransactController;
use App\Http\Controllers\Admin\UserManagementPromotionalController;
use App\Http\Controllers\Admin\UserManagementClientAccountController;
use App\Http\Controllers\Admin\UserManagementClientAccountManageController;
use App\Http\Controllers\Admin\UserManagementClientAccountSendMailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('common.index');
})->name('index');

Route::get('home', function () {
    return view('common.index');
})->name('home');

Route::get('serviceCryptoInvestment', function () {
    return view('common.serviceCryptoInvestment');
})->name('serviceCryptoInvestment');

Route::get('serviceForex', function () {
    return view('common.serviceForex');
})->name('serviceForex');

Route::get('serviceStock', function () {
    return view('common.serviceStock');
})->name('serviceStock');

Route::get('/blog/{category_id}/category', [BlogController::class, 'index'])->name('blog');
Route::get('/blogRead/{article_id}/read', [BlogController::class, 'read'])->name('blogRead');

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');
Route::get('/logout', [LogoutController::class, 'store'])->name('logout');

// Route::get('/login', [LoginController::class, 'index'])->name('login');
// Route::post('/login', [LoginController::class, 'authenticated']);


Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/registerInit', [RegisterInitController::class, 'store'])->name('registerInit');

Route::get('/registerSubmit/{user}/registration', [RegisterSubmitController::class, 'index'])->name('registerSubmit');
Route::post('/registerUpdate', [RegisterSubmitController::class, 'update'])->name('registerUpdate');

Route::get('/dashboard', [PortfolioController::class, 'index'])->name('dashboard');

Route::get('/deposit', [DepositController::class, 'index'])->name('deposit');
Route::get('/depositCode/{transactions_id}/transaction', [DepositCodeController::class, 'index'])->name('depositCode');
Route::get('/depositTransact/{payment_id}/paymentmethod', [DepositTransactController::class, 'index'])->name('depositTransact');
Route::post('/depositTransactStore', [DepositTransactController::class, 'store'])->name('depositTransactStore');

Route::get('/invest', [InvestController::class, 'index'])->name('invest');
Route::get('/investCopyTraderTransact', [InvestCopyTraderTransactController::class, 'index'])->name('investCopyTraderTransact');
Route::post('/investCopyTraderTransact', [InvestCopyTraderTransactController::class, 'update']);
Route::get('/investPackTransact', [InvestPackTransactController::class, 'index'])->name('investPackTransact');
Route::post('/investPackTransact', [InvestPackTransactController::class, 'store']);

Route::get('/withdraw', [WithdrawController::class, 'index'])->name('withdraw');
Route::get('/withdrawTransact/{payment_id}/paymentmethod', [WithdrawTransactController::class, 'index'])->name('withdrawTransact');
Route::post('/withdrawTransactStore', [WithdrawTransactController::class, 'store'])->name('withdrawTransactStore');

Route::get('/activities', [ActivitiesController::class, 'index'])->name('activities');

Route::get('/masterclass', [MasterclassController::class, 'index'])->name('masterclass');
Route::post('/masterclass', [MasterclassController::class, 'store']);

Route::get('/security', [SecurityController::class, 'index'])->name('security');
Route::post('/securityPin', [SecurityController::class, 'storePin'])->name('securityPin');
Route::post('/securityPassword', [SecurityController::class, 'storePassword'])->name('securityPassword');

Route::get('/kyc', [KycController::class, 'index'])->name('kyc');
Route::get('/kycSnapshortIntro', [KycSnapshortIntroController::class, 'index'])->name('kycSnapshortIntro');

Route::get('/kycSnapshortTake', [KycSnapshortTakeController::class, 'index'])->name('kycSnapshortTake');
Route::post('/kycSnapshortTake', [KycSnapshortTakeController::class, 'store']);

Route::get('/kycDocument', [KycDocumentController::class, 'index'])->name('kycDocument');
Route::post('/kycDocument', [KycDocumentController::class, 'store']);

Route::get('/kycProofAddress', [KycProofAddressController::class, 'index'])->name('kycProofAddress');
Route::post('/kycProofAddress', [KycProofAddressController::class, 'store']);

Route::get('/loginAdmin', [LoginAdminController::class, 'index'])->name('loginAdmin');
Route::post('/loginAdmin', [LoginAdminController::class, 'store']);

Route::get('/dashboardAdmin', [DashboardAdminController::class, 'index'])->name('dashboardAdmin');

Route::get('/userManagementClientAccount', [UserManagementClientAccountController::class, 'index'])->name('userManagementClientAccount');

Route::get('/userManagementClientAccountManage/{user}/manage', [UserManagementClientAccountManageController::class, 'index'])->name('userManagementClientAccountManage');
Route::post('/userManagementClientAccountManageUpdate', [UserManagementClientAccountManageController::class, 'update'])->name('userManagementClientAccountManageUpdate');

Route::get('/userManagementClientAccountSendMail', [UserManagementClientAccountSendMailController::class, 'index'])->name('userManagementClientAccountSendMail');
Route::get('/userManagementPromotional', [UserManagementPromotionalController::class, 'index'])->name('userManagementPromotional');

Route::get('/systemConfigSettings/{adm_id}/system', [SystemConfigSettingsController::class, 'index'])->name('systemConfigSettings');
Route::post('/systemConfigSettingsUpdate', [SystemConfigSettingsController::class, 'update'])->name('systemConfigSettingsUpdate');

Route::get('/systemConfigAccountInfo/{user}/account', [SystemConfigAccountInfoController::class, 'index'])->name('systemConfigAccountInfo');
Route::post('/systemConfigAccountInfoUpdate', [SystemConfigAccountInfoController::class, 'update'])->name('systemConfigAccountInfoUpdate');

Route::get('/depositPaymentgate', [DepositPaymentgateController::class, 'index'])->name('depositPaymentgate');
Route::post('/depositPaymentgate', [DepositPaymentgateController::class, 'store']);
Route::post('/depositPaymentgateUpdate', [DepositPaymentgateController::class, 'update'])->name('depositPaymentgateUpdate');
Route::get('/getCoinDetail', [DepositPaymentgateController::class, 'getCoin'])->name('getCoinDetail');

Route::get('/depositLog', [DepositLogController::class, 'index'])->name('depositLog');
Route::post('/depositLog', [DepositLogController::class, 'update']);

Route::get('/withdrawLog', [WithdrawLogController::class, 'index'])->name('withdrawLog');
Route::post('/withdrawLog', [WithdrawLogController::class, 'update']);

Route::get('/investPlan', [InvestPlanController::class, 'index'])->name('investPlan');
Route::post('/investPlan', [InvestPlanController::class, 'store']);
Route::post('/investPlanUpdate', [InvestPlanController::class, 'update'])->name('investPlanUpdate');

Route::get('/investPlanTransact', [InvestPlanTransactionController::class, 'index'])->name('investPlanTransact');
Route::post('/investPlanTransact', [InvestPlanTransactionController::class, 'update']);

Route::get('/masterclassAdmin', [MasterclassAdminController::class, 'index'])->name('masterclassAdmin');

Route::get('/copyTrade', [CopyTradeController::class, 'index'])->name('copyTrade');

Route::get('/blogPostNew', [BlogPostNewController::class, 'index'])->name('blogPostNew');
Route::post('/blogPostNew', [BlogPostNewController::class, 'store']);

Route::get('/blogArticle', [BlogArticleController::class, 'index'])->name('blogArticle');
Route::post('/blogArticle', [BlogArticleController::class, 'store']);
Route::post('/blogArticleDestroy', [BlogArticleController::class, 'destroy'])->name('blogArticleDestroy');

Route::get('/blogPostNewUpdate/{blog_id}/blog', [BlogPostNewUpdateController::class, 'index'])->name('blogPostNewUpdate');
Route::post('/blogPostNewUpdateStore', [BlogPostNewUpdateController::class, 'update'])->name('blogPostNewUpdateStore');

Route::get('/blogCategory', [BlogCategoryController::class, 'index'])->name('blogCategory');
Route::post('/blogCategory', [BlogCategoryController::class, 'store']);

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
