<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the 'web' middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('product');
});


Route::get('/handle-payment', [PayPalPaymentController::class,'handlePayment'])->name('make.payment');

Route::get('/cancel-payment', [PayPalPaymentController::class,'paymentCancel'])->name('cancel.payment');

Route::get('/payment-success', [PayPalPaymentController::class,'paymentSuccess'])->name('success.payment');
