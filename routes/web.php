<?php

use App\Http\Controllers\Front\ShopController;
use App\Http\Controllers\Front\HomeController;
use Illuminate\Support\Facades\Route;




Route::get('/', [HomeController::class, 'index']);

Route::prefix('shop')->name('shop.')->group( function () {

    Route::get('/product/{id}', [ShopController::class, 'show'])->name('show');

    Route::post('/product/{id}', [ShopController::class, 'postComment'])->name('postComment');

});
