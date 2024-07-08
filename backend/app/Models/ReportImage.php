<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportImage extends Model
{
    use HasFactory;
    protected $table = 'report_image';
    protected $fillable = ['report_id', 'name', 'case_id'];
}
