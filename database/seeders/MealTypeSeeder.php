<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MealTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('meal_types')->insert([
            [
                'name' => 'desayuno',
                'img' => 'https://img.icons8.com/?size=100&id=15374&format=png&color=000000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'almuerzo',
                'img' => 'https://img.icons8.com/?size=100&id=ckLpqXIiK1LY&format=png&color=000000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'cena',
                'img' => 'https://img.icons8.com/?size=100&id=69552&format=png&color=000000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
