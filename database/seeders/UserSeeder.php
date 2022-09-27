<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
 
class UserSeeder extends Seeder
{

    public function run()
    {
        /* DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ]); */

        DB::table('users')->insert([
            'email' => 'martin@gmail.com',
            'password' => bcrypt('12345678'),
            'name' => 'Martin',
        ]);

        DB::table('users')->insert([
            'email' => 'martin2@gmail.com',
            'password' => bcrypt('12345678'),
            'name' => 'Martin2',
        ]);
    }
}