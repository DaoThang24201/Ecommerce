<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Front\AccountController;
use App\Http\Controllers\Front\CartController;
use App\Http\Controllers\Front\CheckOutController;
use App\Http\Controllers\Front\ShopController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Middleware\CheckMemberLogin;
use Illuminate\Support\Facades\Route;



//Front- Client

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

    Route::get('add', [CartController::class, 'add'])->name('add');

    Route::get('delete', [CartController::class, 'delete'])->name('delete');

    Route::get('destroy', [CartController::class, 'destroy'])->name('destroy');

    Route::get('update', [CartController::class, 'update'])->name('update');

});

Route::prefix('checkout')->name('checkout.')->group( function () {

    Route::get('/', [CheckOutController::class, 'index'])->name('index');

    Route::post('/', [CheckOutController::class, 'addOrder'])->name('addOrder');

    Route::get('/result', [CheckOutController::class, 'result'])->name('result');

});

Route::prefix('account')->name('account.')->group( function () {

    Route::get('/login', [AccountController::class, 'login'])->name('login');

    Route::post('/login', [AccountController::class, 'checkLogin'])->name('checkLogin');

    Route::get('/logout', [AccountController::class, 'logout'])->name('logout');


    Route::get('/register', [AccountController::class, 'register'])->name('register');

    Route::post('/register', [AccountController::class, 'postRegistering'])->name('postRegistering');


    Route::prefix('my-order')->middleware('CheckMemberLogin')->name('myOrder.')->group(function() {

        Route::get('/', [AccountController::class, 'myOrderIndex'])->name('index');

        Route::get('/{id}', [AccountController::class, 'myOrderShow'])->name('show');

    });

});



//Dashboard- Admin

Route::prefix('admin')->middleware('CheckAdminLogin')->name('admin.')->group(function () {

    Route::redirect('', 'admin/user');

    Route::resource('user', UserController::class);

    Route::resource('category', ProductCategoryController::class);

    Route::resource('brand', BrandController::class);

    Route::prefix('login')->group(function () {

        Route::get('', [\App\Http\Controllers\Admin\HomeController::class, 'getLogin'])->withoutMiddleware('CheckAdminLogin')->name('login');

        Route::post('', [\App\Http\Controllers\Admin\HomeController::class, 'postLogin'])->withoutMiddleware('CheckAdminLogin');

    });

    Route::get('logout', [\App\Http\Controllers\Admin\HomeController::class, 'logout'])->name('logout');
});
