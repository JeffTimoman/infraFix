<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DaerahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'Jawa Barat' => [
                'Kota Bandung' => [
                    "Andir" => [
                        'Campaka', 'Ciroyom', 'Dunguscariang', 'Garuda', 'Kebonjeruk', 'Maleber'
                    ],
                    'Astana Anyar' => [
                        'Cibadak', 'Karanganyar', 'Karasak', 'Nyengseret', 'Panjunan', 'Pelindung Hewan'
                    ],
                    'Antapani' => [
                        'Antapani Mandalajati', 'Antapani Kulon', 'Antapani Wetan', 'Antapani Tengah'
                    ],
                    'Arcamanik' => [
                        'Cisaranten Bina Harapan', 'Cisaranten Endah', 'Cisaranten Kulon', 'Sukamiskin'
                    ],
                ]
            ]
        ];


        foreach ($data as $provinsi => $kota) {
            $provinsiId = DB::table('provinsis')->insertGetId(['name' => $provinsi]);
            foreach ($kota as $kotaName => $kecamatan) {
                $kotaId = DB::table('kotas')->insertGetId(['name' => $kotaName, 'provinsi_id' => $provinsiId]);
                foreach ($kecamatan as $kecamatanName => $kelurahan) {
                    $kecamatanId = DB::table('kecamatans')->insertGetId(['name' => $kecamatanName, 'kota_id' => $kotaId]);
                    foreach ($kelurahan as $kelurahanName) {
                        DB::table('kelurahans')->insert(['name' => $kelurahanName, 'kecamatan_id' => $kecamatanId]);
                    }
                }
            }
        }
    }
}
