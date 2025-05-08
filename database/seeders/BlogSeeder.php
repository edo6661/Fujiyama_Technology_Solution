<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('email', 'admin@gmail.com')->first();
        
        if ($user) {
            Blog::create([
                'title' => 'Pengenalan Laravel',
                'description' => 'Laravel adalah framework PHP yang elegan dan ekspresif untuk pengembangan web modern.',
                'image' => 'https://i.pinimg.com/736x/4a/d0/35/4ad035437e429e46da631b2a4e5d1cc9.jpg',
                'user_id' => $user->id,
            ]);

            Blog::create([
                'title' => 'Tips Belajar Programming',
                'description' => 'Kumpulan tips dan trik yang dapat membantu Anda menjadi programmer yang lebih baik.',
                'image' => 'https://i.pinimg.com/736x/2d/30/fe/2d30fe3ec37991b766474fb0740affa0.jpg',
                'user_id' => $user->id,
            ]);

            Blog::create([
                'title' => 'Membuat Aplikasi Web dengan Laravel dan Vue',
                'description' => 'Tutorial lengkap cara membuat aplikasi web modern menggunakan Laravel di backend dan Vue.js di frontend.',
                'image' => 'https://id.pinterest.com/pin/243335186167376193/',
                'user_id' => $user->id,
            ]);
        }
    }
}