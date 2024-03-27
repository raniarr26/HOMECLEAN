<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\hewanController; 
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductttController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;

Route::get('/products', [ProductController::class, 'index']);



Route::get('/index', [IndexController::class, 'index']);


Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);

// Login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Logout
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/data', [hewanController::class, 'getData']);
// Register
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Routes untuk area pengguna (user)
Route::get('/user/home', [UserController::class, 'index']);
Route::get('/user/product', [ProductttController::class, 'index'])->name('user.products.index');
Route::get('/user/product/create', [ProductttController::class, 'create'])->name('user.products.create');
Route::post('/user/product/store', [ProducttttController::class, 'store'])->name('user.products.store');
// Routes untuk area admin
Route::get('/admin/home', [AdminController::class, 'index']);

