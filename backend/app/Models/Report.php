<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'address',
        'anonymous',
        'email',
        'user_id',
        'case_id',
        'damage_type_id',
        'kelurahan_id',
        'report_code',
        'access_key',
        'hashed_report_code'
    ];
}

/*
 Schema::create('reports', function (Blueprint $table) {
            $table->id();

            $table->string('report_code')->default('')->unique();


            $table->string('title')->default('');
            $table->longText('description')->default('');
            $table->string('address')->default('');


            $table->boolean('anonymous')->default(false);

            #If the report is anonymous, the email will be empty, if email not empty try to get the user_id
            $table->string('email')->default('');
            $table->foreignId('user_id')->nullable()->constrained('user')->onDelete('cascade');

            #If the report is anonymous, the user_id will be null
            $table->string('access_key')->default('');
            $table->string('hashed_report_code')->default('');

            $table->foreignId('case_id')->nullable()->constrained('case', 'id')->onDelete('cascade');
            $table->foreignId('damage_type_id')->nullable()->constrained('damage_type', 'id')->onDelete('set null');
            $table->foreignId('kelurahan_id')->nullable()->constrained('kelurahan', 'id')->onDelete('cascade');

            $table->timestamps();
*/
