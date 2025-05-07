<?php

use Illuminate\Support\Facades\Route;

Route::middleware('guest')->prefix('/auth')->group(function () {
  Route::get('/login', function () {
    return view('auth.login');
  })->name('login');
})->name('auth.');