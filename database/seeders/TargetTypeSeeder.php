<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TargetTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('target_types')->insert([
            [
                'name' => 'Perdida de peso',
                'descripction' => 'Reducir grasa corporal mediante dieta y ejercicio.',
                'img' => 'https://img.icons8.com/?size=100&id=W0o3UrSx99Jk&format=png&color=000000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Ganancia muscular',
                'descripction' => 'Incrementar masa muscular mediante entrenamiento de fuerza.',
                'img' => 'https://img.icons8.com/?size=100&id=rCdN4f5BVvpo&format=png&color=000000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Mantenimiento',
                'descripction' => 'Mantener el peso actual y mejorar la composición corporal.',
                'img' => 'https://img.icons8.com/?size=100&id=37000&format=png&color=000000 ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
