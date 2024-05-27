<?php

namespace Database\Seeders;

use App\Models\DamageType;
use App\Models\Kelurahan;
use App\Models\Report;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NonAnonymousReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $damage_types = DamageType::all();
        $kelurahan = Kelurahan::all();
        $users = User::where('role', 'user')->get();
        for ($i = 1; $i <= 50; $i++){
            $random_report_code = bin2hex(random_bytes(10));
            $data = [
                'report_code' => $random_report_code,
                'title' => 'Non Anonymous'.$i,
                'description' => 'Non Anonymous Description '.$i,
                'address' => 'Non Anonymous Address '.$i,
                'anonymous' => false,
                'user_id' => $users->random()->id,
                'damage_type_id' => $damage_types->random()->id,
                'kelurahan_id' => $kelurahan->random()->id,
            ];
            Report::create($data);
        }
    }
}
