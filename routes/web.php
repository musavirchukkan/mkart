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

    route::name('product.')->controller(PurchaseController::class)->group(function () {
        Route::get('products',  'shop')->name('shop');
        Route::get('details', 'details')->name('details');
        Route::get('category/{id}', 'category')->name('category');
        Route::get('category', 'categoryList')->name('category.list');
    });

    Route::middleware('user_auth')->group(function () {
        Route::get('logout', 'logout')->name('logout');


        route::name('product.')->controller(PurchaseController::class)->group(function () {
            Route::prefix('user')->group(function () {
                Route::get('cart',  'cart')->name('cart');
                Route::get('add-to-cart/{id}', 'addToCart')->name('addToCart');
                Route::get('checkout', 'checkout')->name('checkout');
            });

            Route::get('contact', 'contact')->name('contact');
        });

        Route::name('user.')->prefix('user')->controller(ProfileController::class)->group(function () {

            Route::get('profile', 'profile')->name('profile');
            Route::get('address', 'address')->name('address');
            Route::get('wishlist', 'whishlist')->name('whishlist');
            Route::get('orders', 'orders')->name('orders');
            Route::get('settings', 'settings')->name('settings');
        });
    });
});
