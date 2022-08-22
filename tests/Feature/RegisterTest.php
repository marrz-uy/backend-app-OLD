<?php

namespace Tests\Feature;

use Tests\TestCase;

class RegisterTest extends TestCase
{
    // use RefreshDatabase;

    public function test_Registro_con_valores_correctos()
    {

        $response = $this->withHeaders([
            'content-type' => 'application/json',
        ])->postJson('/api/register', [
            'email'                => 'pedrito@gmail.com',
            'password'             => '12345678',
            'passwordConfirmation' => '12345678',
            'name'                 => 'pedrito',
        ]);

        $response->assertStatus(201);
    }

    public function test_Registro_con_valores_incorrectos()
    {

        $response = $this->withHeaders([
            'content-type' => 'application/json',
        ])->post('/api/register', [
            'email'                => '',
            'password'             => '12345678',
            'passwordConfirmation' => '12345678',
            'name'                 => 'martin',
        ]);

        $response->assertStatus(400);
    }

}
