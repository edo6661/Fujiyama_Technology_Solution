<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

Route::get('/tes-upload-r2', function () {
    try {
        $content = 'Ini adalah test R2 storage';
        $result = Storage::disk('s3')->put('coba_upload_r2.txt', $content);
        
        if ($result) {
            echo "File berhasil diunggah ke R2!";
        } else {
            echo "Gagal mengunggah file.";
        }
    } catch (\Exception $e) {
        echo "Error: " . $e;
    }
    
});


Route::get('/', function () {

    return view('home',[
        'blogs' => Blog::latest()->take(3)->get(),
    ]);
})->name('home');

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
