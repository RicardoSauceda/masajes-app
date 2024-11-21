<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\PaymentController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// ! Registro
Route::get('/myregister', [RegisterController::class, 'index'])->name('register.view');
Route::get('/mylogin', [LoginController::class, 'index'])->name('login.view');

// ! Suscripciones
Route::get('/subscriptions', [SubscriptionController::class, 'index'])->name('subscriptions');
Route::post('/payment', [PaymentController::class, 'index'])->name('payment.main');
Route::post('/payment-storage', [PaymentController::class, 'storage'])->name('payment.storage');

// ! Stripe
Route::get('/checkout/{plan_id}/subscribe/', [CheckoutController::class, 'checkout'])->name('checkout');
Route::post('/checkout/session', [CheckoutController::class, 'createCheckoutSession'])->name('create-checkout-session');
Route::get('/checkout/success', [CheckoutController::class, 'checkoutSuccess'])->name('checkout.success');
Route::get('/checkout/cancel', [CheckoutController::class, 'checkoutCancel'])->name('checkout.cancel');

// ! Opciones de perfil manejado con Breeze
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__ . '/auth.php';
