<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThisCase extends Model
{
    use HasFactory;
    protected $table = 'cases';
    protected $fillable =[
        'title',
        'description',
        'address',
        'coordinate',
        'kelurahan_id',
        'government_id',
        'created_by',
        'damage_type_id',
        'status',
        'case_number'
    ];

    public function milestone_details(){
        return $this->hasMany(MilestoneDetail::class, 'case_id');
    }

    public function damage_type(){
        return $this->belongsTo(DamageType::class);
    }

    public function kelurahan(){
        return $this->belongsTo(Kelurahan::class);
    }

    public function government(){
        return $this->belongsTo(User::class, 'government_id');
    }

    public function reports(){
        return $this->hasMany(Report::class, 'case_id');
    }

    public function likes(){
        return $this->hasMany(Like::class, 'case_id');
    }

    public function comments(){
        return $this->hasMany(Comment::class, 'case_id');
    }

    public function bookmarks(){
        return $this->hasMany(Bookmark::class, 'case_id');
    }
}
