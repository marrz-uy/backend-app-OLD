<?php

namespace Tests\Feature;

use Tests\TestCase;

class LoginTest extends TestCase
{
    public function test_Login_con_valores_correctos()
    {
        // Insert de un usuario para testear login
        $response = $this->withHeaders([
            'content-type' => 'application/json',
        ])->postJson('/api/register', [
            'email'                => 'juancito@gmail.com',
            'password'             => '12345678',
            'passwordConfirmation' => '12345678',
            'name'                 => 'juancito',
        ]);

        $response = $this->withHeaders([
            'Content-type' => 'application/json',
        ])->postJson('/api/login', [
            'email'    => 'juancito@gmail.com',
            'password' => '12345678',
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
        $response = $this->withHeaders([
            'Content-type' => 'application/json',
        ])->postJson('/api/login', [
            'email'    => 'martin@gmail.com',
            'password' => '123456',
        ]);

        $response->assertStatus(422);
    }
}
