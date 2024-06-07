<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TamuController;
use Illuminate\Support\Facades\Route;


Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login')->middleware('guest');
Route::get('/', [TamuController::class, 'index']);
Route::post('/tamu', [TamuController::class, 'store'])->name('tamu');

Route::group([
    'middleware' => 'auth'
], function () {
    Route::get('/dashboard/tamu/{tamu:id}', [TamuController::class, 'view'])->name('tamu.view');
    Route::get('/dashboard/tamu/{tamu:id}/edit', [TamuController::class, 'edit'])->name('tamu.edit');
    Route::put('/tamu/{id}', [TamuController::class, 'update'])->name('tamu.update');
    Route::delete('/tamu/{id}', [TamuController::class, 'destroy'])->name('tamu.destroy');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});