<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MilestoneDetail extends Model
{
    use HasFactory;
    protected $fillable =[
        'milestone_id',
        'case_id',
        'description'
    ];

    public function milestone(){
        return $this->belongsTo(Milestone::class);
    }

    public function case(){
        return $this->belongsTo(ThisCase::class);
    }
}
