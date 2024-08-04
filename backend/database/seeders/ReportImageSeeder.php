<?php

namespace Database\Seeders;

use App\Models\Report;
use App\Models\ReportImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReportImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reports = Report::all();
        foreach ($reports as $report) {
            ReportImage::create([
                'report_id' => $report->id,
                'case_id'=> NULL,
                'name' => 'default.png'
            ]);
            ReportImage::create([
                'report_id' => $report->id,
                'case_id'=> NULL,
                'name' => 'default2.png'
            ]);
            ReportImage::create([
                'report_id' => $report->id,
                'case_id'=> NULL,
                'name' => 'default3.png'
            ]);
            ReportImage::create([
                'report_id' => $report->id,
                'case_id'=> NULL,
                'name' => 'default4.png'
            ]);
            ReportImage::create([
                'report_id' => $report->id,
                'case_id'=> NULL,
                'name' => 'default5.png'
            ]);
        }
    }
}
