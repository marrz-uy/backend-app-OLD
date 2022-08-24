<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Support\Facades\Config;
use Tests\TestCase;
use Tymon\JWTAuth\Facades\JWTAuth;

class RegisterProfileTest extends TestCase
{
    public function test_Registro_Perfil_con_valores_correctos()
    {
        // Insert de un usuario para asegurar existencia de a quien se agregan las preferencias
        $email                = Config::get('api.apiEmail1');
        $password             = Config::get('api.apiPassword1');
        $passwordConfirmation = Config::get('api.apiPasswordConfirmation1');
        $name                 = Config::get('api.apiName1');

        $response = $this->withHeaders([
            'content-type' => 'application/json',
        ])->postJson('/api/register', [
            'email'                => $email,
            'password'             => $password,
            'passwordConfirmation' => $passwordConfirmation,
            'name'                 => $name,
        ]);
       

        //Se hace Login con usuario para generar el JWToken
        $response = $this->withHeaders([
            'Content-type' => 'application/json',
        ])->postJson('/api/login', [
            'email'                => $email,
            'password'             => $password,
        ]);



        $user  = User::where('email', $email)->first();
        $token = JWTAuth::fromUser($user);

        $response = $this->withHeaders([
            'content-type'  => 'application/json',
            'Authorization' => 'Bearer' . $token,
        ])->postJson('/api/userProfile', [
            'user_id'      => $user->id,
            'nacionalidad' => 'Uruguayo',
            'f_nacimiento' => '2020-08-23',
            'preferencias' => 'idgdfgdfgdfgdgdgdfgdfgdgdfgdgdf',
        ]);

        $response->assertStatus(200);

        //ver insertado
    }

    public function test_Registro_Perfil_con_valores_Incorrecto_error_formato_de_fecha()
    {
        // Insert de un usuario para asegurar existencia de a quien se agregan las preferencias

        //getenv => var en .env

        $email                = Config::get('api.apiEmail4');
        $password             = Config::get('api.apiPassword4');
        $passwordConfirmation = Config::get('api.apiPasswordConfirmation4');
        $name                 = Config::get('api.apiName4');

        $response = $this->withHeaders([
            'content-type' => 'application/json',
        ])->postJson('/api/register', [
            'email'                => $email,
            'password'             => $password,
            'passwordConfirmation' => $passwordConfirmation,
            'name'                 => $name,
        ]);
       

        //Se hace Login con usuario para generar el JWToken
        $response = $this->withHeaders([
            'Content-type' => 'application/json',
        ])->postJson('/api/login', [
            'email'                => $email,
            'password'             => $password,
        ]);



        $user  = User::where('email', $email)->first();
        $token = JWTAuth::fromUser($user);

        $response = $this->withHeaders([
            'content-type'  => 'application/json',
            'Authorization' => 'Bearer' . $token,
        ])->postJson('/api/userProfile', [
            'user_id'      => $user->id,
            'nacionalidad' => 'Uruguayo',
            'f_nacimiento' => '2020-08-',
            'preferencias' => 'idgdfgdfgdfgdgdgdfgdfgdgdfgdgdf',
        ]);

        $response->assertStatus(500);
    }
}
