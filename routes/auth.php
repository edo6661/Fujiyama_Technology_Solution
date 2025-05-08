<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->prefix('/auth')->group(function () {
  Route::get('/login', [AuthController::class, 'login'])->name('login');
  Route::post('/login', [AuthController::class, 'signIn'])->name('signIn');
})->name('auth.');

Route::middleware('auth')->prefix('/auth')->group(function () {
  Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});