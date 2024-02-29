<?php

use App\Http\Controllers\Admin\adminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/signin', [adminController::class, 'index'])->name('admin.signin');
Route::get('/employee-signin', [adminController::class, 'employeeSignin'])->name('employee.signin');

Route::get('/admin-dashboard', [adminController::class, 'dashboard'])->name('admin.dashboard');
