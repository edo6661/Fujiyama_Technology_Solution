<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Blog extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'image_public_id',
        'user_id',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function getLogoUrlAttribute()
    {
        if ($this->image && Str::startsWith($this->image, 'https://')) {
            return $this->image;
        }
        
        return asset('storage/' . $this->image); 

    }
    public function getDescriptionTrimAttribute() {
        return Str::limit($this->description,100);
    }
}
