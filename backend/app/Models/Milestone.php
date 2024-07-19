<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Milestone extends Model
{
    use HasFactory;
    protected $fillable =[
        'title',
        'description'
    ];

    public function milestone_details(){
        $this->hasMany(MilestoneDetail::class);
    }
}
