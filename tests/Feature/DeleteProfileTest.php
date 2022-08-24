<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Support\Facades\Config;
use Tests\TestCase;
use Tymon\JWTAuth\Facades\JWTAuth;

class DeleteProfileTest extends TestCase
{
    public function test_Eliminar_Perfil_Correctos()
    {
        // Insert de un usuario para asegurar existencia de a quien se agregan las preferencias
        $email                = Config::get('api.apiEmail3');
        $password             = Config::get('api.apiPassword3');
        $passwordConfirmation = Config::get('api.apiPasswordConfirmation3');
        $name                 = Config::get('api.apiName3');

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
            'email'    => $email,
            'password' => $password,
        ]);

        $user  = User::where('email', $email)->first();
        $token = JWTAuth::fromUser($user);

        //Creo Perfil
        $response = $this->withHeaders([
            'content-type'  => 'application/json',
            'Authorization' => 'Bearer' . $token,
        ])->postJson('/api/userProfile', [
            'user_id'      => $user->id,
            'nacionalidad' => 'Uruguayo',
            'f_nacimiento' => '2020-08-23',
            'preferencias' => 'idgdfgdfgdfgdgdgdfgdfgdgdfgdgdf',
        ]);

        //Elimino perfil
        $response = $this->withHeaders([
            'content-type'  => 'application/json',
            'Authorization' => 'Bearer' . $token,
        ])->deleteJson('api/userProfile/' . $user->id);

        $response->assertStatus(200);
    }

    public function test_Eliminar_Perfil_Incorrecto()
    {
        // Insert de un usuario para asegurar existencia de a quien se agregan las preferencias
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
            'email'    => $email,
            'password' => $password,
        ]);

        $user  = User::where('email', $email)->first();
        $token = JWTAuth::fromUser($user);

        //Creo Perfil
        $response = $this->withHeaders([
            'content-type'  => 'application/json',
            'Authorization' => 'Bearer' . $token,
        ])->postJson('/api/userProfile', [
            'user_id'      => $user->id,
            'nacionalidad' => 'Pakistani',
            'f_nacimiento' => '2020-08-23',
            'preferencias' => 'idgdfgdfgdfgdgdgdfgdfgdgdfgdgdf',
        ]);

        //Elimino perfil
       
        $response = $this->withHeaders([
            'content-type'  => 'application/json',
            'Authorization' => 'Bearer' . $token,
        ])->deleteJson('api/userProfile/9999');

        $response->assertStatus(200);
        $response->assertExactJson([
            'message' => "The user does not exist or does not have a user profile",
        ]);
        
    }
}