<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage; // Tambahkan ini
use Illuminate\Support\Str;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image', // Ini akan menyimpan path relatif di S3, e.g., 'blogs/namafile.jpg'
        'image_public_id', // Kolom ini mungkin tidak Anda perlukan lagi jika hanya untuk URL
        'user_id',
    ];

    // Ganti nama accessor agar lebih sesuai, atau biarkan jika memang ini logo
    public function getImageUrlAttribute() // Sebelumnya getimage_urlAttribute
    {
       
            return Storage::disk('s3')->url($this->image);

    }

    // Jika Anda ingin tetap menggunakan getimage_urlAttribute, pastikan merujuk ke getImageUrlAttribute
    // atau duplikasi logikanya.
    // public function getimage_urlAttribute()
    // {
    //     return $this->getImageUrlAttribute();
    // }


    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function getDescriptionTrimAttribute() {
        return Str::limit($this->description,100);
    }
}