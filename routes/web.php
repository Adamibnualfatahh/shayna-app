<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ProductGalleryController;

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


Auth::routes(['register' => false]);

Route::get('/', [DashboardController::class,'index'])->name('dashboard');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/products/{id}/gallery', [ProductController::class, 'gallery'])->name('products.gallery');
Route::resource('products', ProductController::class);
Route::resource('product-galleries', ProductGalleryController::class);
Route::get('transaction/{id}/set-status', [TransactionController::class, 'setStatus'])->name('transactions.status');
Route::resource('transactions', TransactionController::class);