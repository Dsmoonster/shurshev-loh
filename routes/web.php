<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::controller(PageController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/register', 'register')->name('register');
    Route::get('/login', 'login')->name('login');
    Route::get('/basket', 'basket')->name('basket');
    Route::get('/oplata', 'oplata')->name('oplata');
    Route::get('/dostavka', 'dostavka')->name('dostavka');
    Route::get('/adress', 'adress')->name('adress');
    Route::get('/garant', 'garant')->name('garant');
    Route::get('/lkb', 'lkb')->name('lkb');
    Route::get('/products/all', 'products')->name('products');
    Route::get('/reviews/all', 'reviews')->name('reviews');
    Route::get('/policy', 'policy')->name('policy');
});

Route::controller(AuthController::class)->group(function () {
    Route::post('/register', 'newUser');
    Route::post('/login', 'auth');
    Route::get('/logout', 'logout')->name('logout');
});

Route::controller(AdminProductController::class)->group(function () {
    Route::get('/product/{product}', 'single')->name('product.single');
    Route::get('/products', 'index')->name('admin-product');
    Route::get('/products/{product}/delete', 'destroy')->name('admin-product-destroy');
    Route::get('/products/create', 'create')->name('admin-product-create');
    Route::post('/products/create', 'store');
    Route::get('/product/{product}/update', 'edit')->name('admin-product-edit');
    Route::post('/product/{product}/update', 'update');
});

Route::controller(AdminCategoryController::class)->group(function () {
    Route::get('/category', 'index')->name('admin-category');
    Route::get('/category/create', 'create')->name('admin-category-create');
    Route::get('/category/{category}/delete', 'destroy')->name('admin-category-destroy');
    Route::post('/category/create', 'store');
});

Route::controller(BasketController::class)->middleware('auth')->group(function () {
    Route::get('/products/{product}/basket', 'store')->name('products.basket');
    Route::get('/{product}/delete', 'destroy')->name('products-basket-destroy');
    Route::get('/basket', 'index')->name('basket');
});

Route::controller(OrderController::class)->group(function () {
    Route::post('/basket/order', 'store')->name('create-order');

    Route::get('/orders', 'orders')->name('admin-orders');

    Route::get('/order/{order}/success', 'successOrder')->name('admin-order-success');
    Route::get('/order/{order}/canceled', 'canceledOrder')->name('admin-order-canceled');
    Route::get('/order/{order}/build', 'buildOrder')->name('admin-order-build');
    Route::get('/order/{order}/delivered', 'deliveredOrder')->name('admin-order-delivered');
});

Route::controller(ReviewController::class)->group(function () {
    Route::post('/review/create', 'store')->name('comment-create');
});
