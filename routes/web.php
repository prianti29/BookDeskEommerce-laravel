<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\CartController;
use App\Http\Middleware\OnlyAdmin;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);

//Single Product
Route::get('/product/{id}', [HomeController::class, 'products']); 

Route::get('/add_product/{id}', [CartController::class, 'add_product']);
Route::get('/womens/{id}', [HomeController::class, 'womens']);  
Route::get('/mens/{id}', [HomeController::class, 'mens']); 
Route::get('/cart/remove/{id}', [CartController::class, 'remove_product']);
Route::get('/cart/remove_one_product/{id}', [CartController::class, 'remove_one_product']);
Route::get('/cart/add_one_product/{id}', [CartController::class, 'add_one_product']);
Route::post('/cart/update_product/{id}', [CartController::class, 'update_product']);
Route::get('/checkout', [CartController::class, 'checkout']);



Route::prefix('/admin')->middleware(['auth', OnlyAdmin::class])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::resource('/categories', CategoryController::class);
    Route::resource('/products', ProductController::class);
});
require __DIR__ . '/auth.php';
