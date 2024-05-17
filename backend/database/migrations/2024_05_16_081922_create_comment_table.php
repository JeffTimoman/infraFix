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
        Schema::create('comment', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->longText('content')->default('');
            $table->boolean("anonymous")->default(false);
            $table->boolean("banned")->default(false);

            $table->foreignId('user_id')->nullable()->constrained('user')->onDelete('cascade');
            $table->foreignId('case_id')->nullable()->constrained('case', 'id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comment');
    }
};
