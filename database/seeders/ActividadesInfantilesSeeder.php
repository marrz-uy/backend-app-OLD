<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class ActividadesInfantilesSeeder extends Seeder
{

    public function run()
    {
        $faker = Factory::create();

        for ($c = 221; $c < 241; $c++) {
            DB::table('puntosinteres')->insert([
                'Nombre'       => 'Teatro ' . $faker->city,
                'Departamento' => $faker->state,
                'Ciudad'       => $faker->city,
                'Direccion'    => $faker->address,
                'HoraDeApertura' => $faker->time($format = 'H:i:s', $max = 'now'),
                'HoraDeCierre' => $faker->time($format = 'H:i:s', $max = 'now'),
                'Facebook' => 'https://www.facebook.com/' . 'Teatro infantil ' . $c,
                'Instagram' => 'https://www.instagram.com/' . 'Teatro infantil ' . $c,
                'Descripcion'  => $faker->text($maxNbChars = 200),
                'Imagen'       => $faker->imageUrl($width = 640, $height = 480),
                'Latitud'        => rand(3474990, 3493590),
                'Longitud'       => rand(5583360, 5633330)
            ]);

            DB::table('actividades_intanfiles')->insert([
                'puntosinteres_id' => $c,
                'Tipo'             => 'Teatro',
            ]);
        }

        for ($c = 241; $c < 261; $c++) {
            DB::table('puntosinteres')->insert([
                'Nombre'       => 'Parque ' . $faker->city,
                'Departamento' => $faker->state,
                'Ciudad'       => $faker->city,
                'Direccion'    => $faker->address,
                'HoraDeApertura' => $faker->time($format = 'H:i:s', $max = 'now'),
                'HoraDeCierre' => $faker->time($format = 'H:i:s', $max = 'now'),
                'Facebook' => 'https://www.facebook.com/' . 'Parque de Niños ' . $c,
                'Instagram' => 'https://www.instagram.com/' . 'Parque de Niños ' . $c,
                'Descripcion'  => $faker->text($maxNbChars = 200),
                'Imagen'       => $faker->imageUrl($width = 640, $height = 480),
                'Latitud'        => rand(3474990, 3493590),
                'Longitud'       => rand(5583360, 5633330)
            ]);

            DB::table('actividades_intanfiles')->insert([
                'puntosinteres_id' => $c,
                'Tipo'             => 'Parque',
            ]);
        }
        for ($c = 261; $c < 281; $c++) {
            DB::table('puntosinteres')->insert([
                'Nombre'       => 'Paseo ' . $faker->city,
                'Departamento' => $faker->state,
                'Ciudad'       => $faker->city,
                'Direccion'    => $faker->address,
                'HoraDeApertura' => $faker->time($format = 'H:i:s', $max = 'now'),
                'HoraDeCierre' => $faker->time($format = 'H:i:s', $max = 'now'),
                'Facebook' => 'https://www.facebook.com/' . 'Paseo ' . $c,
                'Instagram' => 'https://www.instagram.com/' . 'Paseo ' . $c,
                'Descripcion'  => $faker->text($maxNbChars = 200),
                'Imagen'       => $faker->imageUrl($width = 640, $height = 480),
                'Latitud'        => rand(3474990, 3493590),
                'Longitud'       => rand(5583360, 5633330)
            ]);

            DB::table('actividades_intanfiles')->insert([
                'puntosinteres_id' => $c,
                'Tipo'             => 'Paseo',
            ]);
        }
        for ($c = 281; $c < 301; $c++) {
            DB::table('puntosinteres')->insert([
                'Nombre'       => 'Techado ' . $faker->city,
                'Departamento' => $faker->state,
                'Ciudad'       => $faker->city,
                'Direccion'    => $faker->address,
                'HoraDeApertura' => $faker->time($format = 'H:i:s', $max = 'now'),
                'HoraDeCierre' => $faker->time($format = 'H:i:s', $max = 'now'),
                'Facebook' => 'https://www.facebook.com/' . 'Ciudad de los niños ' . $c,
                'Instagram' => 'https://www.instagram.com/' . 'Ciudad de los niños ' . $c,
                'Descripcion'  => $faker->text($maxNbChars = 200),
                'Imagen'       => $faker->imageUrl($width = 640, $height = 480),
                'Latitud'        => rand(3474990, 3493590),
                'Longitud'       => rand(5583360, 5633330)
            ]);

            DB::table('actividades_intanfiles')->insert([
                'puntosinteres_id' => $c,
                'Tipo'             => 'Techado',
            ]);
        }
        
    }
}
