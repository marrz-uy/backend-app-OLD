<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{

    public function test_login()
    {
        $response = $this->withHeaders([
            'content-type' => 'application/json',
        ])->post(
            '/api/login',
            [
                'email' => 'martin@mail.com',
                'password' => '12345678'
            ]
        );

        $response = $this->get('/api/login');
        $response->assertStatus(200);
    }
}
