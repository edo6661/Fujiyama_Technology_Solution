<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Str;
class Blog extends Model
{
    protected $fillable = [
        'title',
        'content',
        'image', 
        'image_public_id', 
        'user_id',
    ];

    
    public function getImageUrlAttribute() 
    {
        return Storage::disk('s3')->url($this->image);
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }


    public function getContentTrimAttribute() {
        return Str::limit(strip_tags($this->content), 100);
    }
    
    public function getTitleTrimAttribute() {
        return Str::limit($this->title, 50);
    }
}