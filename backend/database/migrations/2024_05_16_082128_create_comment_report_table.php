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
        Schema::create('comment_report', function (Blueprint $table) {
            $table->foreignId('comment_id')->constrained('comments', 'id')->onDelete('cascade');
            $table->foreignId('case_id')->constrained('cases', 'id')->onDelete('cascade');

            $table->boolean('closed')->default(false);

            $table->primary(['comment_id', 'case_id']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comment_report');
    }
};
