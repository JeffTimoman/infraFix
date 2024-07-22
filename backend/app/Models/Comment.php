<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'content',
        'anonymous',
        'updated_at',
        'banned',
        'user_id',
        'case_id'
    ];

    public function case(){
        return $this->belongsTo(ThisCase::class, 'case_id');
    }
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
