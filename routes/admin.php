<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

route::name('admin.')->prefix('admin')->controller(LoginController::class)->group(function () {
    Route::get('login', 'login')->name('login');
    Route::post('do-login', 'doLogin')->name('do.login');
    Route::get('forgot-password', 'forgotPassword')->name('forgot.password');

    Route::middleware('auth:admin')->group(function () {
        Route::get('profile', 'Profile')->name('profile');
        Route::get('logout', 'logout')->name('logout');


        Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

        route::name('products.')->prefix('products')->controller(ProductController::class)->group(function () {
            Route::get('/', 'list')->name('list');
            Route::get('create', 'create')->name('create');
            Route::post('/save', 'save')->name('save');
            Route::get('details/{id}', 'details')->name('details');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::post('update', 'update')->name('update');
            Route::delete('delete/{id}', 'delete')->name('delete');
        });



        route::name('categories.')->prefix('categories')->controller(CategoryController::class)->group(function () {
            Route::get('/', 'categories')->name('list');
            Route::post('/save', 'save')->name('save');
            Route::get('details/{id}', 'details')->name('details');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::get('update', 'update')->name('update');
            Route::delete('delte/{id}', 'delete')->name('delete');
            Route::get('fetch-categories', 'fetchCategories')->name('fetchCategories');
        });


        route::name('orders.')->prefix('orders')->controller(OrderController::class)->group(function () {
            Route::get('/', 'orders')->name('list');
            Route::get('details/{id}', 'details')->name('details');
            Route::post('update', 'update')->name('edit');
            Route::delete('delte/{id}', 'delete')->name('delete');
        });


        route::name('users.')->prefix('customers')->controller(CustomerController::class)->group(function () {
            Route::get('/', 'customers')->name('list');
            Route::get('details/{id}', 'details')->name('details');
            Route::post('update', 'update')->name('edit');
            Route::delete('delte/{id}', 'delete')->name('delete');
        });
    });
});
