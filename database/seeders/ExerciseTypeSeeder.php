<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExerciseTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Inserción de tipos de ejercicio
        DB::table('exercise_types')->insert([
            [
                'type_name' => 'Cardio',
                'img_url' => 'https://example.com/images/cardio.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type_name' => 'Strength Training',
                'img_url' => 'https://example.com/images/strength_training.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type_name' => 'Yoga',
                'img_url' => 'https://example.com/images/yoga.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type_name' => 'Pilates',
                'img_url' => 'https://example.com/images/pilates.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type_name' => 'HIIT',
                'img_url' => 'https://example.com/images/hiit.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
