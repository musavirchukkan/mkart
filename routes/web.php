<?php


use App\Http\Controllers\User\HomepageController;
use App\Http\Controllers\User\LoginController;
use App\Http\Controllers\User\PurchaseController;
use Illuminate\Support\Facades\Route;




Route::get('/', [HomepageController::class, 'home'])->name('homepage');

Route::get('login', [LoginController::class, 'login'])->name('login');


route::name('users.')->prefix('user')->controller(PurchaseController::class)->group(function () {
    Route::get('cart',  'cart')->name('cart');
    Route::get('shop',  'shop')->name('shop');
    Route::get('checkout', 'checkout')->name('checkout');
    Route::get('contact', 'contact')->name('contact');
    Route::get('details', 'details')->name('details');
});
