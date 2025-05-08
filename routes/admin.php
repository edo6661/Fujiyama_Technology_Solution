<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->prefix('/dashboard')->group(function (){
  Route::get('/', function () {
    return view('admin.dashboard');
  })->name('dashboard');

  Route::prefix('/blogs')->group(function () {
    Route::name('blogs.')->group(function() {
      Route::get('/', function () {
        return view('admin.blogs.index');
      })->name('index');
  
      Route::get('/create', function () {
        return view('admin.blogs.create');
      })->name('create');
  
      Route::get('/{blog}', function ($blog) {
        return view('admin.blogs.show', ['blog' => $blog]);
      })->name('show');
  
      Route::get('/{blog}/edit', function ($blog) {
        return view('admin.blogs.edit', ['blog' => $blog]);
      })->name('edit');
    });
   
  })->name('blogs.');

});