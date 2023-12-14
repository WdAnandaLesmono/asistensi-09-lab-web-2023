<?php

use App\Http\Controllers\Home;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboard;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SellerDashboard;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Guest / Buyer Section
Route::get('/', [Home::class, 'show_home'])->name('home');

Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/{category:slug}', [CategoryController::class, 'show']);

Route::get('/seller', [SellerController::class, 'index']);
Route::get('/seller/{seller:slug}', [SellerController::class, 'show']);

Route::get('/products', [ProductsController::class, 'index']);
Route::get('/products/{products:slug}', [ProductsController::class, 'show']);

Route::get('/wishlist', [ProductsController::class, 'show_wish'])->middleware('auth');
Route::Post('/wish', [ProductsController::class, 'wish'])->middleware('auth');

Route::get('/cart', [ProductsController::class, 'show_cart'])->middleware('auth');
Route::post('/addCart', [ProductsController::class, 'cart'])->middleware('auth');

Route::get('/handle', [FoodController::class, 'index']);
Route::Post('/payments', [PaymentsController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::Post('/login', [LoginController::class, 'authenticate']);
Route::Post('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Seller Section
Route::get('/my-dashboard', [SellerDashboard::class, 'show_toko'])->middleware('seller');
Route::get('/my-dashboard/produk', [SellerDashboard::class, 'show_produk'])->middleware('seller');
Route::get('/my-dashboard/produk/{product:slug}', [SellerDashboard::class, 'single_product'])->middleware('seller');
Route::get('/my-dashboard/pesanan', [SellerDashboard::class, 'show_pesanan'])->middleware('seller');
Route::delete('/my-dashboard/produk', [SellerDashboard::class, 'deleteProduk']);

// Admin Section
Route::get('/admin-dashboard', [AdminDashboard::class, 'admin_dashboard'])->middleware('admin');
Route::get('/admin-dashboard/user', [AdminDashboard::class, 'admin_user'])->middleware('admin');
Route::get('/admin-dashboard/toko', [AdminDashboard::class, 'admin_toko'])->middleware('admin');
Route::get('/admin-dashboard/produk', [AdminDashboard::class, 'admin_produk'])->middleware('admin');
Route::get('/admin-dashboard/kategori', [AdminDashboard::class, 'admin_kategori'])->middleware('admin');
Route::get('/admin-dashboard/pesanan', [AdminDashboard::class, 'admin_pesanan'])->middleware('admin');

Route::get('/ZFED5u3QN9x7ykwzqA4s8W', [AdminDashboard::class, 'superAdmin_dashboard'])->middleware('super-admin');
Route::get('/ZFED5u3QN9x7ykwzqA4s8W/edit-profile', [AdminDashboard::class, 'superAdmin_editProfile'])->middleware('super-admin');
Route::get('/ZFED5u3QN9x7ykwzqA4s8W/user', [AdminDashboard::class, 'superAdmin_user'])->middleware('super-admin');
Route::get('/ZFED5u3QN9x7ykwzqA4s8W/admin', [AdminDashboard::class, 'superAdmin_admin'])->middleware('super-admin');
Route::get('/ZFED5u3QN9x7ykwzqA4s8W/toko', [AdminDashboard::class, 'superAdmin_toko'])->middleware('super-admin');
Route::get('/ZFED5u3QN9x7ykwzqA4s8W/produk', [AdminDashboard::class, 'superAdmin_produk'])->middleware('super-admin');
Route::get('/ZFED5u3QN9x7ykwzqA4s8W/kategori', [AdminDashboard::class, 'superAdmin_kategori'])->middleware('super-admin');
Route::get('/ZFED5u3QN9x7ykwzqA4s8W/pesanan', [AdminDashboard::class, 'superAdmin_pesanan'])->middleware('super-admin');

Route::get('/ZFED5u3QN9x7ykwzqA4s8W/admin/create', [AdminDashboard::class, 'superAdmin_createAdmin'])->middleware('super-admin');
Route::Post('/ZFED5u3QN9x7ykwzqA4s8W/admin/create', [AdminDashboard::class, 'createAdmin'])->middleware('super-admin');