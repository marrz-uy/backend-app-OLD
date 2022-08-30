<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EspectaculosSeeder extends Seeder
{

    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($c = 101; $c < 200; $c++) {
            DB::table('puntosinteres')->insert([
                'Nombre'       => $faker->randomElement($array = array('Cine ', 'Teatro ', 'Carnaval ', 'Futbol ')) . Str::random(10),
                'Departamento' => $faker->state,
                'Ciudad'       => $faker->city,
                'Direccion'    => $faker->address,
                'Descripcion'  => $faker->text($maxNbChars = 200),
                'Imagen'       => $faker->imageUrl($width = 640, $height = 480),
            ]);
        }

        foreach (range(101, 125) as $index) {
            DB::table('espectaculos')->insert([
                'puntosinteres_id' => rand(101, 125),
                'artista'          => $faker->name,
                'precio'           => $faker->randomFloat($nbMaxDecimals = 5, $min = 0, $max = 10000),
                'fecha_inicio'     => $faker->date($format = 'Y-m-d', $max = 'now'),
                'fecha_fin'        => $faker->date($format = 'Y-m-d', $max = 'now'),
                'Tipo'             => 'Cine',
            ]);
        }
        foreach (range(126, 150) as $index) {
            DB::table('espectaculos')->insert([
                'puntosinteres_id' => rand(126, 150),
                'precio'           => $faker->randomFloat($nbMaxDecimals = 5, $min = 0, $max = 10000),
                'fecha_inicio'     => $faker->date($format = 'Y-m-d', $max = 'now'),
                'fecha_fin'        => $faker->date($format = 'Y-m-d', $max = 'now'),
                'Tipo'             => 'Teatro',
            ]);
        }
        foreach (range(151, 175) as $index) {
            DB::table('espectaculos')->insert([
                'puntosinteres_id' => rand(151, 175),
                'precio'           => $faker->randomFloat($nbMaxDecimals = 5, $min = 0, $max = 10000),
                'fecha_inicio'     => $faker->date($format = 'Y-m-d', $max = 'now'),
                'fecha_fin'        => $faker->date($format = 'Y-m-d', $max = 'now'),
                'Tipo'             => 'Carnaval',
            ]);
        }
        foreach (range(176, 200) as $index) {
            DB::table('espectaculos')->insert([
                'puntosinteres_id' => rand(176, 200),
                'precio'           => $faker->randomFloat($nbMaxDecimals = 5, $min = 0, $max = 10000),
                'fecha_inicio'     => $faker->date($format = 'Y-m-d', $max = 'now'),
                'fecha_fin'        => $faker->date($format = 'Y-m-d', $max = 'now'),
                'Tipo'             => 'Futbol',
            ]);
        }
    }
}
