<?php

namespace Tests\Feature;

use Tests\TestCase;

class LoginTest extends TestCase
{
    public function test_Login_con_valores_correctos()
    {
        $response = $this->withHeaders([
            'Content-type' => 'application/json',
        ])->postJson('/api/login', [
            'email'    => 'martin@gmail.com',
            'password' => '12345678',
        ]);

        $response->assertStatus(200);

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
