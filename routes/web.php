<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TamuController;
use Illuminate\Support\Facades\Route;


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/', [TamuController::class, 'index']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');