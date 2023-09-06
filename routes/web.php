<?php


use App\Http\Controllers\User\HomepageController;
use App\Http\Controllers\User\PurchaseController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomepageController::class, 'home'])->name('homepage');
Route::get('cart', [PurchaseController::class, 'cart'])->name('cart');
Route::get('shop', [PurchaseController::class, 'shop'])->name('shop');
