<?php

namespace Tests\Feature;

use Tests\TestCase;

class RegisterTest extends TestCase
{

    public function test_Registro_con_valores_correctos()
    {

        $email                = getenv('API_USER_EMAIL2');
        $password             = getenv('API_USER_PASSWORD2');
        $passwordConfirmation = getenv('API_USER_PASSWORDCONFIRMATION2');
        $name                 = getenv('API_USER_NAME2');

        $response = $this->withHeaders([
            'content-type' => 'application/json',
        ])->postJson('/api/register', [
            'email'                => $email,
            'password'             => $password,
            'passwordConfirmation' => $passwordConfirmation,
            'name'                 => $name,
        ]);

        $response->assertStatus(201);

        //!buscar insertado
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
