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
        Schema::create('milestone_detail', function (Blueprint $table) {
            $table->foreignId('milestone_id')->constrained('milestone', 'id')->onDelete('cascade')->nullable();
            $table->foreignId('case_id')->constrained('case', 'id')->onDelete('cascade')->nullable();
            $table->string('description');

            $table->primary(['milestone_id', 'case_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('milestone_detail');
    }
};
