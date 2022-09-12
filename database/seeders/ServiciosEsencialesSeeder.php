<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiciosEsencialesSeeder extends Seeder
{

    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($c = 1; $c < 100; $c++) {
            DB::table('puntosinteres')->insert([
                'Nombre'       => $faker->randomElement($array = array('Hospital ', 'Farmacia ', 'Cerrajeria ', 'Estacion ', 'Seccional ')) . $faker->city,
                'Departamento' => $faker->state,
                'Ciudad'       => $faker->city,
                'Direccion'    => $faker->address,
                'Descripcion'  => $faker->text($maxNbChars = 200),
                'Imagen'       => $faker->imageUrl($width = 640, $height = 480),
            ]);
        }

        foreach (range(1, 20) as $index) {
            DB::table('servicios_esenciales')->insert([
                'puntosinteres_id' => rand(1, 20),
                'Tipo'             => 'Hospitales',
            ]);
        }
        foreach (range(21, 40) as $index) {
            DB::table('servicios_esenciales')->insert([
                'puntosinteres_id' => rand(21, 40),
                'Tipo'             => 'Farmacias',
            ]);
        }
        foreach (range(41, 60) as $index) {
            DB::table('servicios_esenciales')->insert([
                'puntosinteres_id' => rand(41, 60),
                'Tipo'             => 'Cerrajerias',
            ]);
        }
        foreach (range(61, 80) as $index) {
            DB::table('servicios_esenciales')->insert([
                'puntosinteres_id' => rand(61, 80),
                'Tipo'             => 'Estaciones de Servicio',
            ]);
        }
        foreach (range(81, 100) as $index) {
            DB::table('servicios_esenciales')->insert([
                'puntosinteres_id' => rand(81, 100),
                'Tipo'             => 'Seccionales',
            ]);
        }
    }
}
