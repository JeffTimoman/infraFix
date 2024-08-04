<?php

namespace Database\Seeders;

use App\Models\DamageType;
use App\Models\Kelurahan;
use App\Models\Report;
use App\Models\User;
use Illuminate\Database\Seeder;
use App\Services\CustomEncryptor;

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

        for ($i = 1; $i <= 10000; $i++) {
            $random_report_code = bin2hex(random_bytes(10));
            $random_access_key = 'iniaccesskey';

            // Create an instance of CustomEncryptor with the random access key
            $encryptor = new CustomEncryptor($random_access_key);

            // Encrypt the report code using the CustomEncryptor
            $hashed_report_code = $encryptor->encrypt($random_report_code);

            $data = [
                'report_code' => $random_report_code,
                'hashed_report_code' => $hashed_report_code,
                'title' => 'Non Anonymous' . $i,
                'description' => 'Non Anonymous Description ' . $i,
                'address' => 'Non Anonymous Address ' . $i,
                'anonymous' => false,
                'user_id' => $users->random()->id,
                'damage_type_id' => $damage_types->random()->id,
                'kelurahan_id' => $kelurahan->random()->id,
            ];

            Report::create($data);
        }
    }
}
