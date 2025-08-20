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
Route::get('/projects/government-systems', function () {
    return view('projects.government-systems');
})->name('project.government-systems');
Route::get('/projects/enterprise-solutions', function () {
    return view('projects.enterprise-solutions');
})->name('project.enterprise-solutions');
Route::get('/projects/community-social-platforms', function () {
    return view('projects.community-social-platforms');
})->name('project.community-social-platforms');
Route::get('/projects/technology-integrations', function () {
    return view('projects.technology-integrations');
})->name('project.technology-integrations');
require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';