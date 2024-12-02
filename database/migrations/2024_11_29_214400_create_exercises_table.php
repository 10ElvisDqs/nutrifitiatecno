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
            Schema::create('exercises', function (Blueprint $table) {
            $table->id('exercise_id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('video_path')->nullable();
            $table->unsignedBigInteger('equipment_id')->nullable();
            $table->unsignedBigInteger('exercise_type_id')->nullable();
            $table->timestamps();

            // Relaciones
            $table->foreign('equipment_id')
                ->references('equipment_id')
                ->on('equipments')->onDelete('cascade');
            $table->foreign('exercise_type_id')
                ->references('exercise_type_id')
                ->on('exercise_types')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exercises');
    }
};
