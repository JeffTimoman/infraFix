<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Milestone extends Model
{
    use HasFactory;
    protected $table = 'milestone';
    //Milestone -> Milestone_details(has many)->
    //Milestone_detail -> case ->
    // public function milestone_details(){
    //     $this->hasMany(MilestoneDetail::class);
    // }

}
