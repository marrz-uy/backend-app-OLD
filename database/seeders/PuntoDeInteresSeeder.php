<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PuntoDeInteresSeeder extends Seeder
{

    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($c = 0; $c < 50; $c++) {
            DB::table('puntosinteres')->insert([
                'Nombre'       => 'Farmacia xxx'. Str::random(10),
                'Departamento' => $faker->state,
                'Ciudad'       => $faker->city,
                'Direccion'    => $faker->address,
                'Descripcion'  => $faker->text($maxNbChars = 200),
                'Imagen'       => $faker->imageUrl($width = 640, $height = 480),
            ]);
        }

        foreach (range(1, 50) as $index) {
            DB::table('servicios_esenciales')->insert([
                'puntosinteres_id' => rand(1, 50),
                'Tipo'             => 'Farmacias',
            ]);
        }
    }
}
