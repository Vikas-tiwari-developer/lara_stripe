<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PaymentsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/checkout', [PaymentsController::class, 'stripePage'])->name('stripe.checkout.page');
Route::get('/contact', [ContactController::class, 'contactPage'])->name('contact.page');
Route::post('/send/mail', [ContactController::class, 'sendContactMailWithPaymentLink'])->name('contact.mail.send');
Route::post('/stripe/checkout', [PaymentsController::class, 'stripePost'])->name('stripe.checkout.post');
