<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MuscleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('muscles')->insert([
            [
                'name' => 'Abdominales',
                'img_url' => 'https://www.ericfavre.com/lifestyle/es/wp-content/uploads/sites/8/2021/09/approche-biomecanique-1024x1024-1.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Bíceps',
                'img_url' => 'https://protesisdebiceps.com/wp-content/uploads/2024/04/Protesis-de-Biceps.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Tríceps',
                'img_url' => 'https://www.endomondo.com/wp-content/uploads/2024/08/Band-Tricep-Kickback-Guide.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Dorsales',
                'img_url' => 'https://www.trainologym.com/wp-content/uploads/2022/10/Imagen-1-1-246x245.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Pectorales',
                'img_url' => 'https://protesispectorales.com/wp-content/uploads/2024/06/Protesis-de-Pectorales.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Trapecios',
                'img_url' => 'https://fisico.tv/wp-content/uploads/2021/12/Musculo-trapecio.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Hombros',
                'img_url' => 'https://media.istockphoto.com/id/533845828/es/foto/deltoris-m%C3%BAsculos-anterior-de-la-anatom%C3%ADa-m%C3%BAsculos-aislado-sobre-blanco.jpg?s=612x612&w=0&k=20&c=08Szy-9VJSciUsSk3U95EcE_QU88gw-7tqRaBwrxid0=',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Cuádriceps',
                'img_url' => 'https://mundoentrenamiento.com/wp-content/uploads/2023/09/ejercicio-sentadilla-musculos-implicados.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Isquiotibiales',
                'img_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxY4eSIh6hV7bNhrKh49KH7yll7gmhQEkPQw&s',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Glúteos',
                'img_url' => 'https://somasalud.es/wp-content/uploads/2019/03/musculo-gluteo.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Pantorrillas',
                'img_url' => 'https://www.lyfta.app/_next/image?url=https%3A%2F%2Flyfta.app%2Fimages%2Fexercises%2F14901101.png&w=3840&q=20',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
