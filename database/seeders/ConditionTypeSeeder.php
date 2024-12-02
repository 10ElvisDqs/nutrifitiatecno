<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class ConditionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('condition_types')->insert([
            [
                'name' => 'Enfermedad',
                'img' => 'https://img.icons8.com/?size=100&id=cX1UuzMq3YwS&format=png&color=000000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Alergia',
                'img' => 'https://img.icons8.com/?size=100&id=9YXqqJtp8g2u&format=png&color=000000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Condición Física',
                'img' => 'https://img.icons8.com/?size=100&id=oXIbenDDte7O&format=png&color=000000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
