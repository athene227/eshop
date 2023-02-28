<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\PayPalController;
use App\Http\Controllers\PaymentController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('account', [AuthController::class, 'show'])->name('account');

Route::get('login', [AuthController::class, 'loginView'])->name('loginView');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::get('signup', [AuthController::class, 'registerView'])->name('registerView');
Route::post('signup', [AuthController::class, 'register'])->name('register');
Route::get('singout', [AuthController::class, 'signout'])->name('signout');

Route::controller(StripePaymentController::class)->group(function () {
    Route::post('stripe', 'stripePost')->name('stripe.post');
});

Route::controller(PayPalController::class)->group(function () {
    Route::get('paypal', 'payment')->name('paypal');
    Route::get('paypal/cancel', 'cancel')->name('paypal.cancel');
    Route::get('paypal/success', 'success')->name('paypal.success');
});

Route::controller(PaymentController::class)->group(function () {
    Route::get('payment', 'index')->name('payment');
});
