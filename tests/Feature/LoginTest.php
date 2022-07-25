<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Config;
use Tests\TestCase;

class LoginTest extends TestCase
{

    public function testLogin()
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

        $response = $this->get('/');
        $response->assertStatus(200);
    }
}
