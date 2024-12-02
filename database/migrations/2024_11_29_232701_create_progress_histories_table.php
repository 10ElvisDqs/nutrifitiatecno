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
        Schema::create('progress_histories', function (Blueprint $table) {
            $table->id('history_id'); // Clave primaria
            $table->foreignId('user_id') // Relación con usuarios
                  ->constrained('users','id') // Tabla referenciada
                  ->onDelete('cascade'); // Elimina progreso si se elimina usuario
            $table->foreignId('routine_day_id') // Relación con rutina (día)
                  ->constrained('routine_days','routine_day_id') // Tabla referenciada
                  ->onDelete('cascade'); // Elimina progreso si se elimina día de rutina
            $table->boolean('completed')->default(false); // Ejercicio completado o no
            $table->date('exercise_date'); // Fecha de ejercicio
            $table->text('comments')->nullable(); // Comentarios opcionales
            $table->timestamps(); // Campos created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('progress_histories');
    }
};
