<?php

namespace Database\Seeders;

use App\Models\DamageType;
use App\Models\Kelurahan;
use App\Models\Report;
use App\Models\ReportImage;
use App\Models\ThisCase;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <=5; $i++){
            $damage_types = DamageType::inRandomOrder()->first();
            $government_id = User::where('role', 'government')->inRandomOrder()->first()->id;
            $kelurahan_id = Kelurahan::inRandomOrder()->first()->id;
            $random_manager = User::where('role', 'manager')->inRandomOrder()->first()->id;

            $this_case = ThisCase::create([
                'case_number' => bin2hex(random_bytes(30)).date('YmdHis'),
                'damage_type_id' => $damage_types->id,
                'government_id' => $government_id,
                'kelurahan_id' => $kelurahan_id,
                'created_by' => $random_manager,
                'status' => 0,
                'description' => "Dummy Description $i",
                'title' => "Dummy Title $i",
                'coordinate' => "-6.1234$i, 107.1234$i",
                'address' => "Dummy Address $i",
            ]);
            $reports_in_kelurahan_area = Report::where('kelurahan_id', $kelurahan_id)->where('case_id', NULL)->where('damage_type_id', $damage_types->id)->take(random_int(1, 15))->get();
            $reports_in_kelurahan_area->each(function ($report) use ($this_case) {
                $report->update(['case_id' => $this_case->id]);

                $report_images = ReportImage::where('report_id', $report->id)->get();
                $report_images->each(function ($report_image) use ($this_case) {
                    $report_image->update(['case_id' => $this_case->id]);
                });
            });
        }
    }
}
