<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductadminController;
use App\Http\Controllers\ProfilePenggunaController;
use App\Http\Controllers\ProdukController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware('admin')->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
});
Route::middleware('admin.guest')->group(function(){
    Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');
    Route::post('/admin/login_submit', [AdminController::class, 'AdminLoginSubmit'])->name('admin.login_submit');
    Route::get('/admin/forget_password', [AdminController::class, 'AdminForgetPassword'])->name('admin.forget_password');
    Route::post('/admin/password_submit', [AdminController::class, 'AdminPasswordSubmit'])->name('admin.password_submit');
    Route::get('/admin/reset-password/{token}/{email}', [AdminController::class, 'AdminResetPassword']);
    Route::post('admin.reset_password_submit', [AdminController::class, 'AdminResetPasswordSubmit'])->name('admin.reset_password_submit');
});

Route::get('/produk', [ProductController::class, 'index']);

Route::get('/client/login', [ClientController::class, 'showLoginForm'])->name('client.login');
Route::get('/client/register', [ClientController::class, 'showRegistrationForm'])->name('client.register');
Route::post('/client/register', [ClientController::class, 'register'])->name('client.register.submit');
Route::get('/client/forget_password', [ClientController::class, 'clientForgetPassword'])->name('client.forget_password');

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/admin/products', [ProductController::class, 'index'])->name('admin.products.index');
Route::get('/profil', [ProfilePenggunaController::class, 'show'])->name('profil.show');
Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');