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
                'image' => 'https://id.pinterest.com/pin/288582288641389332/',
                'user_id' => $user->id,
            ]);

            Blog::create([
                'title' => 'Tips Belajar Programming',
                'description' => 'Kumpulan tips dan trik yang dapat membantu Anda menjadi programmer yang lebih baik.',
                'image' => 'https://id.pinterest.com/pin/844493673849309/',
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