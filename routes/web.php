<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

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



Route::get('/', [MainController::class, 'index'])->name('index');


Route::get('about-us', [MainController::class, 'AboutUs'])->name('about.us');
Route::get('team-members', [MainController::class, 'TeamMembers'])->name('team.members');
Route::get('privacy-policy', [MainController::class, 'PrivacyPolicy'])->name('privacy.policy');
Route::get('terms-and-conditions', [MainController::class, 'TermsConditions']);
Route::get('refund-policy', [MainController::class, 'RefundPolicy']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {


    Route::get('user/logout', [DashboardController::class, 'UserLogout'])->name('user.logout');
    Route::get('user/profile', [DashboardController::class, 'UserProfile'])->name('user.profile');
    Route::get('user/edit/profile', [DashboardController::class, 'UserEditProfile'])->name('user.edit.profile');
    Route::post('profile/update', [DashboardController::class, 'userProfileUpdate'])->name('profile.update');
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    route::get('dashboard/service', [ServiceController::class, 'Service'])->name('dashboard.service');

    route::get('dashboard/service/detail/{id}', [ServiceController::class, 'ServiceDetail'])->name('dashboard.service.detail');
    route::get('dashboard/service-history', [ServiceController::class, 'ServiceHistory'])->name('dashboard.service.history');
    route::get('dashboard/deposit', [ServiceController::class, 'ServiceDeposit'])->name('dashboard.deposit');
    route::get('dashboard/deposit/create', [ServiceController::class, 'Create'])->name('dashboard.deposit.create');
    route::post('dashboard/deposit/store', [ServiceController::class, 'Store'])->name('dashboard.deposit.store');

    route::get('dashboard/dawnload', [ServiceController::class, 'DawnloadFile'])->name('dashboard.dawnload');
     route::post('dashboard/done/{id}', [ServiceController::class, 'DawnloadDOne'])->name('dashboard.done');




    route::get('dashboard/user/center', [UserController::class, 'Center'])->name('dashboard.user.center');


    Route::get('/setting', [SettingController::class, 'setting'])->name('user.setting');
    Route::post('user/update', [SettingController::class, 'UpdateProfile'])->name('user.update');

    // result route
Route::get('results', [ResultController::class, 'index'])->name('results');
Route::get('result/add', [ResultController::class, 'add'])->name('result.add');
Route::post('result/store', [ResultController::class, 'Store'])->name('result.store');
Route::get('result/edit/{id}', [ResultController::class, 'Edit'])->name('result.edit');
Route::post('result/update/{id}', [ResultController::class, 'Update'])->name('result.update');
Route::get('result/delete/{id}', [ResultController::class, 'Delete'])->name('result.delete');

Route::get('payment-verify/{invoice_id}', [ServiceController::class, 'PaymentVerify'])->name('user.payment.verify');
    Route::post('payment-verify/webhook', [ServiceController::class, 'PaymentVerifyWebhook'])->name('user.payment.verify.webhook');

    Route::post('/bkash/create-payment', [ServiceController::class, 'createPayment'])->name('bkash.create.payment');

        Route::post('/bkash/execute-payment', [ServiceController::class, 'executePayment'])->name('bkash.execute.payment');

});

require __DIR__.'/auth.php';


Route::prefix('/admin')->namespace('App\Http\Controllers\admin')->group(function(){
    // admin login route here========================>
    Route::match(['get','post'],'login','AdminController@login');
    Route::group(['middleware'=>['admin']],function(){
        // admin Dashboar route here========================>
        Route::get('dashboard','AdminDashboardControll@dashboard');


        // admin Dashboar route here========================>
        Route::get('dashboard','AdminController@dashboard');

        // admin logout route here========================>
         Route::get('logout','AdminController@logout');
        // admin update password route here========================>
         Route::match(['get','post'],'update-password','AdminController@updatePassword');

         Route::post('check-admin-password','AdminController@checkAdminPassword');
         Route::match(['get','post'],'update-details','AdminController@updateAdminDetails');

         //category route
         Route::get('categories','CategoryController@categories');
         Route::match(['get','post'],'add-edit-category/{id?}','CategoryController@addEditCategory');
         Route::get('delete-category/{id}','CategoryController@deleteCategory');
         Route::get('delete-category-image/{id}','CategoryController@deleteCategoryImage');
        //sheba route
         Route::get('sheba','ShebaController@sheba');


         Route::match(['get','post'],'add-edit-sheba/{id?}','ShebaController@addEditSheba');
         Route::get('delete-sheba/{id}','ShebaController@deleteSheba');
         Route::get('delete-sheba-image/{id}','ShebaController@deleteShebaImage');
         Route::get('delete-sheba-file/{id}','ShebaController@deleteShebaFile');

        //  //user route
         Route::get('users','AdminController@Uers');
          Route::get('delete-user/{id}','AdminController@deleteUser');
         Route::match(['get','post'],'add-edit-user/{id?}','AdminController@addEditUser');
         Route::get('balance/{id}','AdminController@AddBalance');
         Route::post('balance/add','AdminController@AddBStore');
         Route::get('balance/delete/{id}','AdminController@BalanceDelete');






    });

});
