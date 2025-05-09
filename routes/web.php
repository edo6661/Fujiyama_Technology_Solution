<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;


Route::get('/', function () {
    return view('home',[
        'blogs' => Blog::latest()->take(3)->get(),
    ]);
})->name('home');

Route::get('/blogs', function () {
    return view('blogs', [
        'blogs' => Blog::latest()->paginate(3),
    ]);
})->name('blogs');
Route::get('/blog/{blog}', function (Blog $blog) {
    return view('blog', [
        'blog' => $blog,
        'moreBlogs' => Blog::where('id', '!=', $blog->id)->latest()->take(3)->get(),
    ]);
})->name('blog');

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
