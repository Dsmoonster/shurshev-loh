<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
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

Route::controller(PageController::class)->group(function (){
    Route::get('/', 'index')->name('home');
    Route::get('/register', 'register')->name('register');
    Route::get('/login', 'login')->name('login');
});

Route::controller(AuthController::class)->group(function (){
    Route::post('/register', 'newUser');
    Route::post('/login', 'auth');
    Route::get('/logout', 'logout')->name('logout');
});

Route::controller(AdminProductController::class)->group(function (){
    Route::get('/product/{product}', 'single')->name('product.single');
    Route::get('/products', 'index')->name('admin-product');
    Route::get('/products/{product}/delete', 'destroy')->name('admin-product-destroy');
});


Route::controller(AdminCategoryController::class)->group(function (){
    Route::get('/category', 'index')->name('admin-category');
    Route::get('/category/create', 'create')->name('admin-category-create');
    Route::get('/category/{category}/delete', 'destroy')->name('admin-category-destroy');
    Route::post('/category/create', 'store');
});
