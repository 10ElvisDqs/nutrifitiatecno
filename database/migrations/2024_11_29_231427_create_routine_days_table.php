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
        Schema::create('routine_days', function (Blueprint $table) {
            $table->id('routine_day_id'); // clave primaria para routine_days
            $table->foreignId('routine_id')->constrained('routines', 'routine_id')->onDelete('cascade'); // Relación con la tabla routines
            $table->string('weekday'); // Día de la semana
            $table->foreignId('exercise_id')->constrained('exercises','exercise_id')->onDelete('cascade'); // Relación con la tabla exercises
            $table->date('scheduled_date'); // Fecha programada
            $table->integer('sets'); // Número de series
            $table->integer('repetitions'); // Número de repeticiones
            $table->integer('rest_time'); // Tiempo de descanso en segundos
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('routine_days');
    }
};
