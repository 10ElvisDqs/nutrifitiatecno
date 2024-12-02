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
        Schema::create('exercise_types', function (Blueprint $table) {
            $table->id('exercise_type_id'); // Clave primaria personalizada
            $table->string('type_name');   // Campo 'type_name' como texto
            $table->string('img_url');   // Campo 'type_name' como texto
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exercise_types');
    }
};
