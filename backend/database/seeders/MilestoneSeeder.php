<?php

namespace Database\Seeders;

use App\Models\Milestone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MilestoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Milestone::create([
            'title' => 'Laporan Diproses',
            'description' => 'Laporan telah diterima oleh pemerintah, dan sedang diproses'
        ]);

        Milestone::create([
            'title' => 'Survei Lokasi',
            'description' => 'Pemerintah telah melakukan survei lokasi'
        ]);

        Milestone::create([
            'title' => 'Memberikan Laporan',
            'description' => 'Pemerintah telah memberikan laporan terkait survei yang telah dilakukan'
        ]);

        Milestone::create([
            'title' => 'Mengirim Tim Terkait',
            'description' => 'Pemerintah telah mengirim tim terkait untuk menyelesaikan masalah yang dilaporkan'
        ]);

        Milestone::create([
            'title' => 'Bukti Perkembangan',
            'description' => 'Pemerintah telah mengirim bukti perkembangan dalam menyelesaikan masalah yang dilaporkan'
        ]);

        Milestone::create([
            'title' => 'Status Perbaikan',
            'description' => 'Pemerintah telah mengirim bukti serta status perbaikan dari masalah yang dilaporkan'
        ]);

        Milestone::create([
            'title' => 'Selesai',
            'description' => 'Masalah yang dilaporkan telah selesai'
        ]);
    }
}
