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
        Schema::create('exercise_muscles', function (Blueprint $table) {
            $table->unsignedBigInteger('exercise_id');
            $table->unsignedBigInteger('muscle_id');

            // Define la clave primaria compuesta
            $table->primary(['exercise_id', 'muscle_id']);

            // Relaciones (Foreign Keys)
            $table->foreign('exercise_id')->references('exercise_id')->on('exercises')->onDelete('cascade');
            $table->foreign('muscle_id')->references('muscle_id')->on('muscles')->onDelete('cascade');

            // Timestamps opcionales
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exercise_muscles');
    }
};
