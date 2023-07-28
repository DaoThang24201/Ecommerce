<?php

use App\Http\Controllers\Front\CartController;
use App\Http\Controllers\Front\ShopController;
use App\Http\Controllers\Front\HomeController;
use Illuminate\Support\Facades\Route;




Route::get('/', [HomeController::class, 'index'])->name('home');


Route::prefix('shop')->name('shop.')->group( function () {

    Route::get('/', [ShopController::class, 'index'])->name('index');

    Route::get('/product/{id}', [ShopController::class, 'show'])->name('show');

    Route::post('/product/{id}', [ShopController::class, 'postComment'])->name('postComment');

    Route::get('/category/{categoryName}', [ShopController::class, 'category'])->name('category');

    Route::get('/tag/{tagName}', [ShopController::class, 'tag'])->name('tag');

});

Route::prefix('cart')->name('cart.')->group( function () {

    Route::get('/', [CartController::class, 'index'])->name('index');

    Route::get('add/{id}', [CartController::class, 'add'])->name('add');

});
