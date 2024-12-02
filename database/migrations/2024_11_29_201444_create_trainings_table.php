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
        Schema::create('trainings', function (Blueprint $table) {
            $table->id('id_training');
            $table->string('name');
            $table->string('goal');
            $table->integer('days'); // número de días por semana
            $table->string('level'); // nivel de entrenamiento
            $table->string('muscles'); // grupos musculares
            $table->string('equipment'); // equipo disponible
            $table->date('start_date');
            $table->date('end_date');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('recommendation_ia_id')->nullable();  // Relación con la consulta
            // Llave foránea hacia la tabla 'users'
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // Relación con la tabla 'consultations'
            $table->foreign('recommendation_ia_id')->references('recommendation_ia_id')->on('ia_recommendations')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainings');
    }
};
