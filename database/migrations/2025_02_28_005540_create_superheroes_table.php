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
        Schema::create('superheroes', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->unique();
            $table->string('real_name', 50); // Ensure this line is present
            $table->string('publisher', 50);
            $table->foreignId('universo_id')->constrained('universos')->onDelete('cascade');
            $table->foreignId('genero_id')->constrained('generos')->onDelete('cascade');
            $table->string('picture', 200)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('superheroes');
    }
};

