<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Config;
use Tests\TestCase;

class LoginTest extends TestCase
{
    public function test_Login_con_valores_correctos()
    {
        // Insert de un usuario para testear login

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

        $response = $this->withHeaders([
            'Content-type' => 'application/json',
        ])->postJson('/api/login', [
            'email'    => $email,
            'password' => $password,
        ]);

        $response->assertStatus(200);
        $response->assertJsonStructure(["access_token"]);
        $response->assertJsonStructure(["token_type"]);
        $response->assertJsonStructure(["expires_in"]);
    }

    public function test_Login_con_usuario_que_no_existe()
    {
        $response = $this->withHeaders([
            'Content-type' => 'application/json',
        ])->postJson('/api/login', [
            'email'    => 'yessica@gmail.com',
            'password' => '12345678',
        ]);

        $response->assertStatus(401);
    }

    public function test_Login_con_password_corto()
    {
        $email    = Config::get('api.apiEmail1');

        $response = $this->withHeaders([
            'Content-type' => 'application/json',
        ])->postJson('/api/login', [
            'email'    => $email,
            'password' => '123456',
        ]);

        $response->assertStatus(422);
    }
}
