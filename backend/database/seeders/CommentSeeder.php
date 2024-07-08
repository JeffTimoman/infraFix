<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $userIds = DB::table('users')->pluck('id')->toArray();
        $caseIds = DB::table('cases')->pluck('id')->toArray();

        for ($i = 0; $i < 50; $i++) {
            Comment::create([
                'content' => $faker->paragraph,
                'anonymous' => $faker->boolean,
                'updated_at' => now(),
                'banned' => $faker->boolean,
                'user_id' => $faker->randomElement($userIds),
                'case_id' => $faker->randomElement($caseIds),
                'created_at' => now(),
            ]);
        }
    }
}
