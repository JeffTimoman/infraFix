<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Factories\RandomUserFactory;
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
            'email_verified_at' => now(),
            'date_of_birth' => '1999-01-01',
            'role' => 'admin',
        ]);

        #Create manager
        User::create([
            'name' => 'manager',
            'email' => 'manager@admin.com',
            'username' => 'manager',
            'password' => bcrypt('admin123'),
            'email_verified_at' => now(),
            'date_of_birth' => '1999-01-01',
            'role' => 'manager',
        ]);
        User::create([
            'name' => 'manager1',
            'email' => 'manager1@admin.com',
            'username' => 'manager1',
            'password' => bcrypt('admin123'),
            'email_verified_at' => now(),
            'date_of_birth' => '1999-01-01',
            'role' => 'manager',
        ]);
        User::create([
            'name' => 'manager2',
            'email' => 'manager2@admin.com',
            'username' => 'manager2',
            'password' => bcrypt('admin123'),
            'email_verified_at' => now(),
            'date_of_birth' => '1999-01-01',
            'role' => 'manager',
        ]);

        #Create government
        User::create([
            'name' => 'government',
            'email' => 'government@admin.com',
            'username' => 'government',
            'password' => bcrypt('admin123'),
            'email_verified_at' => now(),
            'date_of_birth' => '1999-01-01',
            'role' => 'government',
        ]);
        User::create([
            'name' => 'government1',
            'email' => 'government1@admin.com',
            'username' => 'government1',
            'password' => bcrypt('admin123'),
            'email_verified_at' => now(),
            'date_of_birth' => '1999-01-01',
            'role' => 'government',
        ]);
        User::create([
            'name' => 'government2',
            'email' => 'government2@admin.com',
            'username' => 'government2',
            'password' => bcrypt('admin123'),
            'email_verified_at' => now(),
            'date_of_birth' => '1999-01-01',
            'role' => 'government',
        ]);

        #Create user
        User::create([
            'name' => 'user',
            'email' => 'user@admin.com',
            'username' => 'user',
            'password' => bcrypt('admin123'),
            'email_verified_at' => now(),
            'date_of_birth' => '1999-01-01',
            'role' => 'user',
        ]);
    }
}
