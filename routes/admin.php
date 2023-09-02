<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;


route::name('admin.')->prefix('admin')->controller(LoginController::class)->group(function () {
    Route::get('login', 'login')->name('login');
    Route::post('do-login', 'doLogin')->name('do.login');

    Route::get('admin/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    route::name('products.')->prefix('admin/products')->controller(ProductController::class)->group(function () {
        Route::get('/', 'list')->name('list');
        Route::get('create', 'create')->name('create');
        Route::post('save', 'save')->name('save');
        Route::get('delete/{id}', 'delete')->name('delete');
        Route::get('details/{id}', 'details')->name('details');
    });
});
