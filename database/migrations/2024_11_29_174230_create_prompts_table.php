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
        Schema::create('prompts', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->text('template');
            $table->timestamps();
        });
    }

    // DB::table('prompts')->insert([
    //     ['name' => 'explain_topic', 'template' => 'Explica qué es {{topic}} para {{audience}}.'],
    //     ['name' => 'translate_text', 'template' => 'Traduce el siguiente texto al idioma {{language}}: "{{text}}".'],
    // ]);

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prompts');
    }
};
