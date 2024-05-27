<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('report', function (Blueprint $table) {
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
            $table->string('hashed_report_code')->default('');

            $table->foreignId('case_id')->nullable()->constrained('case', 'id')->onDelete('cascade');
            $table->foreignId('damage_type_id')->nullable()->constrained('damage_type', 'id')->onDelete('set null');
            $table->foreignId('kelurahan_id')->nullable()->constrained('kelurahan', 'id')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('report');
    }
};
