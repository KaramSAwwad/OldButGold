<?php

use Illuminate\Support\Facades\Route;
use Modules\Customer\Http\Controllers\AuthController;


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
Route::controller(AuthController::class)->prefix('customer')->group(function() {
    Route::get('sign-in', 'showSignInForm')->name('show.customer.login.form');
    Route::post('signing-in', 'signingIn')->name('customer.signing-in');

    Route::get('sign-up', 'showSignUpForm')->name('show.customer.signup.form');
    Route::post('signing-up', 'signingUp')->name('show.hello.world');
});

//Route::get('signing-up2', [AuthController::class, 'signingUp'])->name('customer.signing.up.2');
//Route::controller(AuthController::class)->get('signing-up2', 'testsign')->name('customer.signing.up.2');
//
//Route::controller(AuthController::class)->prefix('customer')->group(function() {
//    Route::post('signing-up', 'signingUp')->name('customer.signing.up');
//});


//Route::controller(CustomerController::class)->prefix('customer/panel')->middleware('auth:customer')->group(function() {
//    Route::get('/', 'index')->name('customer.show.dashboard');
//    Route::post('logout', 'Logout')->name('customer.logout');
//});
//Route::post('customer/signing-up', function () {
//    dd('Route Hit');
//})->name('customer.signing.up');
//Route::get('sign-up', 'showSignUpForm')->name('show.customer.signup.form');
//Route::post('signing-up', 'signingUp')->name('customer.signing.up');
