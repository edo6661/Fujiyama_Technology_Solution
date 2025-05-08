<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->prefix('/dashboard')->group(function (){
  Route::get('/', function () {
    return view('admin.dashboard');
  })->name('dashboard');

  Route::prefix('/blogs')->group(function () {
    Route::name('blogs.')->group(function() {
      Route::get('/', [BlogController::class,'index'])->name('index');
      Route::delete('/', [BlogController::class,'destroy'])->name('destroy');

      Route::get('/create', [BlogController::class,'create'])->name('create');
      Route::post('/create', [BlogController::class,'store'])->name('store');
  
      Route::get('/{blog}', [BlogController::class,'show'])->name('show');
      
      Route::get('/{blog}/edit',[BlogController::class,'edit'])->name('edit');
      Route::put('/{blog}', [BlogController::class,'update'])->name('update');
      
    });
   
  })->name('blogs.');

});