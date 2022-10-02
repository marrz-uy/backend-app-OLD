<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventosSeeder extends Seeder
{

    public function run()
    {
        $faker = \Faker\Factory::create();

        //!CINES
        DB::table('eventos')->insert([
            'puntosinteres_id'       => 101,
            'Nombre'                 => 'La pistola desnuda',
            'LugarDeVentaDeEntradas' => 'RedPagos',
            'FechaInicio'            => '2022-09-29',
            'FechaFin'               => '2022-09-29',
            'HoraInicio'             => '10:30:00',
            'HoraFin'                => '23:30:00',
            'Tipo'                   => 'Pelicula',
        ]);

        DB::table('eventos')->insert([
            'puntosinteres_id'       => 102,
            'Nombre'                 => 'Titanic',
            'LugarDeVentaDeEntradas' => 'Abitab',
            'FechaInicio'            => '2022-09-29',
            'FechaFin'               => '2022-09-29',
            'HoraInicio'             => '10:30:00',
            'HoraFin'                => '23:30:00',
            'Tipo'                   => 'Pelicula',
        ]);

        DB::table('eventos')->insert([
            'puntosinteres_id'       => 103,
            'Nombre'                 => 'El justiciero',
            'LugarDeVentaDeEntradas' => 'Abitab',
            'FechaInicio'            => '2022-11-29',
            'FechaFin'               => '2022-11-29',
            'HoraInicio'             => '10:30:00',
            'HoraFin'                => '23:30:00',
            'Tipo'                   => 'Pelicula',
        ]);

        DB::table('eventos')->insert([
            'puntosinteres_id'       => 104,
            'Nombre'                 => 'The Dark knight',
            'LugarDeVentaDeEntradas' => 'Abitab',
            'FechaInicio'            => '2022-11-29',
            'FechaFin'               => '2022-11-29',
            'HoraInicio'             => '10:30:00',
            'HoraFin'                => '23:30:00',
            'Tipo'                   => 'Pelicula',
        ]);

        DB::table('eventos')->insert([
            'puntosinteres_id'       => 105,
            'Nombre'                 => 'Superman',
            'LugarDeVentaDeEntradas' => 'Abitab',
            'FechaInicio'            => '2022-11-29',
            'FechaFin'               => '2022-11-29',
            'HoraInicio'             => '10:30:00',
            'HoraFin'                => '23:30:00',
            'Tipo'                   => 'Pelicula',
        ]);

        //!TEATROS

        DB::table('eventos')->insert([
            'puntosinteres_id'       => 121,
            'Nombre'                 => 'Hamlet',
            'LugarDeVentaDeEntradas' => 'RedPagos',
            'FechaInicio'            => '2022-09-29',
            'FechaFin'               => '2022-09-29',
            'HoraInicio'             => '10:30:00',
            'HoraFin'                => '23:30:00',
            'Tipo'                   => 'Obra de teatro',
        ]);

        DB::table('eventos')->insert([
            'puntosinteres_id'       => 122,
            'Nombre'                 => 'Romeo y Julieta',
            'LugarDeVentaDeEntradas' => 'Abitab',
            'FechaInicio'            => '2022-09-29',
            'FechaFin'               => '2022-09-29',
            'HoraInicio'             => '10:30:00',
            'HoraFin'                => '23:30:00',
            'Tipo'                   => 'Obra de teatro',
        ]);

        DB::table('eventos')->insert([
            'puntosinteres_id'       => 123,
            'Nombre'                 => 'Sueño de una noche de verano',
            'LugarDeVentaDeEntradas' => 'RedPagos',
            'FechaInicio'            => '2022-11-29',
            'FechaFin'               => '2022-11-29',
            'HoraInicio'             => '10:30:00',
            'HoraFin'                => '23:30:00',
            'Tipo'                   => 'Obra de teatro',
        ]);

        DB::table('eventos')->insert([
            'puntosinteres_id'       => 124,
            'Nombre'                 => 'La casa de Bernarda Alba',
            'LugarDeVentaDeEntradas' => 'Abitab',
            'FechaInicio'            => '2022-11-29',
            'FechaFin'               => '2022-11-29',
            'HoraInicio'             => '10:30:00',
            'HoraFin'                => '23:30:00',
            'Tipo'                   => 'Obra de teatro',
        ]);

        DB::table('eventos')->insert([
            'puntosinteres_id'       => 125,
            'Nombre'                 => 'La Celestina',
            'LugarDeVentaDeEntradas' => 'RedPagos',
            'FechaInicio'            => '2022-11-29',
            'FechaFin'               => '2022-11-29',
            'HoraInicio'             => '10:30:00',
            'HoraFin'                => '23:30:00',
            'Tipo'                   => 'Obra de teatro',
        ]);

        //!CARNAVAL

        DB::table('eventos')->insert([
            'puntosinteres_id'       => 141,
            'Nombre'                 => 'Los Choby’s',
            'LugarDeVentaDeEntradas' => 'RedPagos',
            'FechaInicio'            => '2022-09-29',
            'FechaFin'               => '2022-09-29',
            'HoraInicio'             => '10:30:00',
            'HoraFin'                => '23:30:00',
            'Tipo'                   => 'Murga',
        ]);

        DB::table('eventos')->insert([
            'puntosinteres_id'       => 142,
            'Nombre'                 => 'Tabú',
            'LugarDeVentaDeEntradas' => 'Abitab',
            'FechaInicio'            => '2022-09-29',
            'FechaFin'               => '2022-09-29',
            'HoraInicio'             => '10:30:00',
            'HoraFin'                => '23:30:00',
            'Tipo'                   => 'Murga',
        ]);

        DB::table('eventos')->insert([
            'puntosinteres_id'       => 143,
            'Nombre'                 => 'Sociedad Anónima',
            'LugarDeVentaDeEntradas' => 'RedPagos',
            'FechaInicio'            => '2022-11-29',
            'FechaFin'               => '2022-11-29',
            'HoraInicio'             => '10:30:00',
            'HoraFin'                => '23:30:00',
            'Tipo'                   => 'Murga',
        ]);

        DB::table('eventos')->insert([
            'puntosinteres_id'       => 144,
            'Nombre'                 => 'Yambo Kenia',
            'LugarDeVentaDeEntradas' => 'Abitab',
            'FechaInicio'            => '2022-11-29',
            'FechaFin'               => '2022-11-29',
            'HoraInicio'             => '10:30:00',
            'HoraFin'                => '23:30:00',
            'Tipo'                   => 'Murga',
        ]);

        DB::table('eventos')->insert([
            'puntosinteres_id'       => 145,
            'Nombre'                 => 'Los Muchachos',
            'LugarDeVentaDeEntradas' => 'RedPagos',
            'FechaInicio'            => '2022-11-29',
            'FechaFin'               => '2022-11-29',
            'HoraInicio'             => '10:30:00',
            'HoraFin'                => '23:30:00',
            'Tipo'                   => 'Murga',
        ]);

        //!EVENTO DEPORTIVO

        DB::table('eventos')->insert([
            'puntosinteres_id'       => 161,
            'Nombre'                 => 'Partido de futbol',
            'LugarDeVentaDeEntradas' => 'Abitab',
            'FechaInicio'            => '2022-09-29',
            'FechaFin'               => '2022-09-29',
            'HoraInicio'             => '10:30:00',
            'HoraFin'                => '23:30:00',
            'Tipo'                   => 'Partido',
        ]);

        DB::table('eventos')->insert([
            'puntosinteres_id'       => 162,
            'Nombre'                 => 'Partido de basketball',
            'LugarDeVentaDeEntradas' => 'Abitab',
            'FechaInicio'            => '2022-09-29',
            'FechaFin'               => '2022-09-29',
            'HoraInicio'             => '10:30:00',
            'HoraFin'                => '23:30:00',
            'Tipo'                   => 'Partido',
        ]);

        DB::table('eventos')->insert([
            'puntosinteres_id'       => 163,
            'Nombre'                 => 'Carrera de F1',
            'LugarDeVentaDeEntradas' => 'RedPagos',
            'FechaInicio'            => '2022-11-29',
            'FechaFin'               => '2022-11-29',
            'HoraInicio'             => '10:30:00',
            'HoraFin'                => '23:30:00',
            'Tipo'                   => 'Carrera',
        ]);

        DB::table('eventos')->insert([
            'puntosinteres_id'       => 164,
            'Nombre'                 => 'Partido de volleyball',
            'LugarDeVentaDeEntradas' => 'Abitab',
            'FechaInicio'            => '2022-11-29',
            'FechaFin'               => '2022-11-29',
            'HoraInicio'             => '10:30:00',
            'HoraFin'                => '23:30:00',
            'Tipo'                   => 'Partido',
        ]);

        DB::table('eventos')->insert([
            'puntosinteres_id'       => 165,
            'Nombre'                 => 'Partido de ping pong',
            'LugarDeVentaDeEntradas' => 'RedPagos',
            'FechaInicio'            => '2022-11-29',
            'FechaFin'               => '2022-11-29',
            'HoraInicio'             => '10:30:00',
            'HoraFin'                => '23:30:00',
            'Tipo'                   => 'Partido',
        ]);

    }

}
