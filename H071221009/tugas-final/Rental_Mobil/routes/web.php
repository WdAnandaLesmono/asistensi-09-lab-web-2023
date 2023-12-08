<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('homepage');
Route::get('detail/{car:slug}', [\App\Http\Controllers\HomeController::class, 'detail'])->name('detail');
Route::get('contact', [\App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::post('contact', [\App\Http\Controllers\HomeController::class, 'contactStore'])->name('contact.store');


Route::get('admin/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard.index');
Route::resource('admin/cars', \App\Http\Controllers\Admin\CarController::class);
Route::put('admin/cars/update-image/{id}', [\App\Http\Controllers\Admin\CarController::class, 'updateImage'])->name('admin.cars.updateImage');

Route::get('admin/messages', [\App\Http\Controllers\Admin\MessageController::class, 'index'])->name('admin.messages.index');
Route::delete('admin/messages/{message}', [\App\Http\Controllers\Admin\MessageController::class, 'destroy'])->name('admin.messages.destroy');



Auth::routes();
