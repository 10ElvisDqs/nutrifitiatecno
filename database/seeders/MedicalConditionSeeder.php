<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MedicalConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('medical_conditions')->insert([
            // Enfermedades
            ['name' => 'Diabetes', 'condition_type_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Hipertensión', 'condition_type_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Asma', 'condition_type_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Cáncer', 'condition_type_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Enfermedad Cardíaca', 'condition_type_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Enfermedad Renal', 'condition_type_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Artritis', 'condition_type_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Osteoporosis', 'condition_type_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Tuberculosis', 'condition_type_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Enfermedades Respiratorias', 'condition_type_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Alergias
            ['name' => 'Alergia al Polvo', 'condition_type_id' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Alergia al Gluten', 'condition_type_id' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Alergia a la Lactosa', 'condition_type_id' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Alergia al Polvo de Polen', 'condition_type_id' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Alergia a los Maníes', 'condition_type_id' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Alergia a los Ácaros', 'condition_type_id' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Alergia al Níquel', 'condition_type_id' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Alergia al Huevo', 'condition_type_id' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Alergia al Pescado', 'condition_type_id' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Alergia a los Animales', 'condition_type_id' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Condiciones Físicas
            ['name' => 'Obesidad', 'condition_type_id' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Bajo Peso', 'condition_type_id' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Sedentarismo', 'condition_type_id' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Sobrepeso', 'condition_type_id' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Hipertensión Arterial', 'condition_type_id' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Colesterol Alto', 'condition_type_id' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Insuficiencia Respiratoria', 'condition_type_id' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Hiperlipidemia', 'condition_type_id' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Hipoglucemia', 'condition_type_id' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Desnutrición', 'condition_type_id' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
