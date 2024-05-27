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
        Schema::create('cases', function (Blueprint $table) {
            $table->id();
            $table->string("case_number");

            $table->string('title');
            $table->longText('description')->nullable(true);
            $table->longText('address')->nullable(true);
            $table->string('coordinate')->nullable(true);
            $table->foreignId('kelurahan_id')->nullable()->onDelete('cascade');


            $table->boolean('status')->default(false);

            $table->foreignId('government_id')->nullable()->constrained('user', 'id')->onDelete('cascade');


            $table->foreignId('created_by')->nullable()->constrained('user', 'id')->onDelete('cascade');

            $table->foreignId('damage_type_id')->nullable()->constrained('damage_type', 'id')->onDelete('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cases');
    }
};
