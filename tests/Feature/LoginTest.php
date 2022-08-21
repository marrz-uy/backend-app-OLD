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

        $response = $this->get('/');
        $response->assertStatus(200);
    }
}
