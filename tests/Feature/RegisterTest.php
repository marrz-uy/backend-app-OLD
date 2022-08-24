<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Config;
use Tests\TestCase;

class RegisterTest extends TestCase
{

    public function test_Registro_con_valores_correctos()
    {

        $email                = Config::get('api.apiEmail2');
        $password             = Config::get('api.apiPassword2');
        $passwordConfirmation = Config::get('api.apiPasswordConfirmation2');
        $name                 = Config::get('api.apiName2');

        $response = $this->withHeaders([
            'content-type' => 'application/json',
        ])->postJson('/api/register', [
            'email'                => $email,
            'password'             => $password,
            'passwordConfirmation' => $passwordConfirmation,
            'name'                 => $name,
        ]);

        $response->assertStatus(201);
    }

    public function test_Registro_con_valores_incorrectos()
    {

        $response = $this->withHeaders([
            'content-type' => 'application/json',
        ])->postJson('/api/register', [
            'email'                => '',
            'password'             => '12345678',
            'passwordConfirmation' => '12345678',
            'name'                 => 'martin',
        ]);

        $response->assertStatus(400);
    }
    

}
