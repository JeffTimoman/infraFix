<?php

namespace Database\Seeders;

use App\Models\DamageType;
use App\Models\Kelurahan;
use App\Models\Report;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnonymousReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $damage_types = DamageType::all();
        $kelurahan = Kelurahan::all();

        for ($i = 1; $i <= 200; $i++){
            $random_report_code = bin2hex(random_bytes(10));
            $random_access_key = 'iniaccesskey';
            $hashed_report_code = encrypt($random_report_code, $random_access_key);

            $data = [
                'report_code' => $random_report_code,
                // 'access_key' => $random_access_key,
                'hashed_report_code' => $hashed_report_code,
                'anonymous' => true,
                'title' => 'Anonymous'.$i,
                'description' => 'Description '.$i,
                'address' => 'Address '.$i,
                'damage_type_id' => $damage_types->random()->id,
                'kelurahan_id' => $kelurahan->random()->id,
            ];
            Report::create($data);
        }
    }
}
