<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;

Route::middleware(['auth'])->group(function () {
    Route::get('/user/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/user', [UserController::class, 'update'])->name('user.update');
    Route::delete('/user', [UserController::class, 'destroy'])->name('user.destroy');

    Route::resource('/product', ProductController::class);
});

Route::get('/dashboard', [ProductController::class, 'index'])->middleware(['auth'])->name('dashboard');
