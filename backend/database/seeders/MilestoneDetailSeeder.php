<?php

namespace Database\Seeders;

use App\Models\Milestone;
use App\Models\MilestoneDetail;
use App\Models\ThisCase;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MilestoneDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $milestonedata = Milestone::all();
        $casedata = ThisCase::all();

        for ($i=1; $i < 11; $i++) {
            MilestoneDetail::create([
                'milestone_id' => $milestonedata->random()->id,
                'case_id' => $casedata->random()->id,
                'description' => "Milestone Detail Description $i",
            ]);
        }
    }
}
