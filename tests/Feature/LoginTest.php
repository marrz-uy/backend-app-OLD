<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Config;
use Tests\TestCase;

class LoginTest extends TestCase
{
    public function test_Login_con_valores_correctos()
    {
        $baseUrl = Config::get('app.url') . '/api/login';

        $email    = Config::get('api.apiEmail');
        $password = Config::get('api.apiPassword');

        $response = $this->withHeaders([
            'Content-type' => 'application/json',
        ])->postJson($baseUrl . '/', [
            'email'    => $email,
            'password' => $password,
        ]);

        $response = $this->get('/')->assertStatus(200);
    }
}
