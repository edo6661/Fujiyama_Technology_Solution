<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::create([
            'name' => 'admin',
        ]);

        $user = User::firstOrCreate([
            'email' => 'admin@gmail.com',
            'name' => 'Admin',
            'password' => bcrypt('admin123'),
        ]);
        // ! attach itu untuk menghubungkan data ke tabel pivot, maksudnya tuh role admin misalnya id nya itu 1, nah di tabel user_role itu ada dua kolom yaitu user_id dan role_id, nah kita mau menghubungkan user id 1 ke role id 1
        $user->roles()->attach($adminRole->id);
    }
}
