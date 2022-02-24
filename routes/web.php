<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\CartController;
use App\Http\Middleware\OnlyAdmin;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);
Route::get('/add_product/{id}', [CartController::class, 'add_product']);
Route::get('/checkout', [CartController::class, 'checkout']);

Route::prefix('/admin')->middleware(['auth', OnlyAdmin::class])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::resource('/categories', CategoryController::class);
    Route::resource('/products', ProductController::class);
});
require __DIR__ . '/auth.php';
