<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RandomUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password = 'admin123';
        for ($i = 1; $i <= 50; $i++){
            $data = [
                'name' => fake()->name(),
                'email' => fake()->unique()->safeEmail(),
                'email_verified_at' => now(),
                'password' => Hash::make($password),
                'date_of_birth' => fake()->date(),
                'role' => 'user',
                'username' => fake()->unique()->userName(),
            ];

            User::create($data);
        }
    }
}
