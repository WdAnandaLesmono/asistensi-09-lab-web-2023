<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;
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
Route::get('/product',[productController::class, 'readAll']);

// Ketik Di url "%20" sebagai pengganti spasi,Contoh : /product/Classic%20Cars
Route::get('/product/{detailProduct}',[productController::class, 'detailData'])->name('detailProduct'); 

