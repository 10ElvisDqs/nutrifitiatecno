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
        Schema::create('routines', function (Blueprint $table) {
            $table->id('routine_id');
            $table->string('name');
            $table->text('description');
            $table->foreignId('id_training') // Asegúrate de que este campo coincida con el nombre de la clave primaria
            ->constrained('trainings', 'id_training') // Establece la referencia a la columna 'id_training' de la tabla 'trainings'
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('routines');
    }
};
