<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\DashboardController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [Controller::class,'index'])->name('Home');
Route::get('/jasa', [Controller::class,'jasa'])->name('jasa');
Route::get('/transaksi', [Controller::class,'transaksi'])->name('transaksi');
Route::get('/contact', [Controller::class,'contact'])->name('contact');
Route::get('/checkout', [Controller::class,'checkout'])->name('checkout');

Route::get('/admin', [Controller::class,'admin'])->name('admin');
Route::get('/report', [Controller::class,'report'])->name('report');
Route::get('/product',[controller::class,'product'])->name('product');
Route::get('/user', [Controller::class,'user'])->name('user');
