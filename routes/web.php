<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BukuController;
use App\Http\Controllers\Admin\CetakController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\FavoriteController;
use App\Http\Controllers\User\UserController;
use App\Http\Middleware\UserMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// User Routes
Route::middleware(['auth', 'UserMiddleware'])->group(function () {
    Route::get('dashboard', [UserController::class, 'index'])->name('dashboard');
    Route::get('favorite', [FavoriteController::class, 'index'])->name('user.favorite');
});

// Admin Routes
Route::middleware(['auth', 'AdminMiddleware'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/staff/cetak', [CetakController::class, 'pdf']);
    Route::resource('/admin/buku', BukuController::class);
    Route::resource('/admin/staff', StaffController::class);
});