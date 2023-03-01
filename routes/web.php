<?php

use App\Http\Controllers\{PassportAuthController,
    PenController,
    SearchController,
    StripePaymentController,
    TestController
};
use Illuminate\Support\Facades\Route;

Route::get('/', static function () {
    return phpinfo();
});

// postman login get and push
Route::get('/login', [PassportAuthController::class, 'showLoginForm'])->name('login');
Route::get('/register', [PassportAuthController::class, 'showRegisterForm'])->name('register');
Route::post('/login-submit', [PassportAuthController::class, 'passportAuthLoginSubmit']);
Route::get('/register-submit', [PassportAuthController::class, 'passportAuthRegisterSubmit']);

// how chart is rendered
Route::get('/chart', [PassportAuthController::class, 'showApexChart'])->middleware('auth')->name('apex-chart');

// implementing search feature
Route::get('/search', [SearchController::class, 'index'])->name('search');
Route::get('/autocomplete', [SearchController::class, 'autocomplete'])->name('autocomplete');

// single action controller
Route::get('/pen', PenController::class);

// learning how to optimize queries
Route::get('/query-test', [TestController::class, 'testHotelBookingQuery']);

// implementing stripe
Route::get('/stripe', [StripePaymentController::class, 'stripe']);
Route::post('/stripe', [StripePaymentController::class, 'stripePost'])->name('stripe.post');



