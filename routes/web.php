<?php


use App\Http\Controllers\User\HomepageController;
use App\Http\Controllers\User\LoginController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\PurchaseController;
use Illuminate\Support\Facades\Route;




Route::get('/', [HomepageController::class, 'home'])->name('homepage');

Route::controller(LoginController::class)->group(function () {
    Route::get('login',  'login')->name('login');
    Route::post('do-login',  'doLogin')->name('do.login');
    Route::get('signup',  'signup')->name('signup');
    Route::post('do-signup',  'doSignup')->name('do.signup');
    Route::get('forgot-password',  'forgotPassword')->name('forgot.password');
    Route::get('logout', 'logout')->name('logout');
});


route::name('users.')->prefix('user')->controller(PurchaseController::class)->group(function () {
    Route::get('cart',  'cart')->name('cart');
    Route::get('shop',  'shop')->name('shop');
    Route::get('checkout', 'checkout')->name('checkout');
    Route::get('contact', 'contact')->name('contact');
    Route::get('details', 'details')->name('details');
});

Route::get('user/profile', [ProfileController::class, 'profile'])->name('users.profile');
