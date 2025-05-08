<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('home',[
        'blogs' => Blog::latest()->take(3)->get(),
    ]);
})->name('home');

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
