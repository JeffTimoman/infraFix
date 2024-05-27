<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        #Create admin
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'username' => 'admin',
            'password' => bcrypt('admin123'),
            'role' => 'admin',
        ]);

        #Create manager
        User::create([
            'name' => 'manager',
            'email' => 'manager@admin.com',
            'username' => 'manager',
            'password' => bcrypt('admin123'),
            'role' => 'manager',
        ]);

        #Create government
        User::create([
            'name' => 'government',
            'email' => 'government@admin.com',
            'username' => 'government',
            'password' => bcrypt('admin123'),
            'role' => 'government',
        ]);

        #Create user
        User::create([
            'name' => 'user',
            'email' => 'user@admin.com',
            'username' => 'user',
            'password' => bcrypt('admin123'),
            'role' => 'user',
        ]);
    }
}
