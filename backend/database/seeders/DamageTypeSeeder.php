<?php

namespace Database\Seeders;

use App\Models\DamageType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DamageTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'Kerusakan Jalan', 'Kerusakan Bangunan', 'Kerusakan Saluran Air', 'Kerusakan Listrik', 'Kerusakan Telekomunikasi'
        ];

        foreach ($data as $item){
            DamageType::create(['name' => $item]);
        }
    }
}
