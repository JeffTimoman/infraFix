<?php

namespace Database\Seeders;

use App\Models\DamageType;
use App\Models\Kelurahan;
use App\Models\Report;
use App\Services\CustomEncryptor;
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

        for ($i = 1; $i <= 1000; $i++) {
            $random_report_code = bin2hex(random_bytes(10));
            $random_access_key = 'iniaccesskey';

            // Create an instance of CustomEncryptor with the random access key
            $encryptor = new CustomEncryptor($random_access_key);

            // Encrypt the report code using the CustomEncryptor
            $hashed_report_code = $encryptor->encrypt($random_report_code);

            $data = [
                'report_code' => $random_report_code,
                'hashed_report_code' => $hashed_report_code,
                'anonymous' => true,
                'title' => 'Anonymous' . $i,
                'description' => 'Description ' . $i,
                'address' => 'Address ' . $i,
                'damage_type_id' => $damage_types->random()->id,
                'kelurahan_id' => $kelurahan->random()->id,
            ];

            Report::create($data);
        }
    }
}
