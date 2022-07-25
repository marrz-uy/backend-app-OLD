<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Config;
use Tests\TestCase;

class LoginTest extends TestCase
{

    public function testLogin()
    {
        $baseUrl  = Config::get('app.url') . '/api/login';

        $email    = Config::get('api.apiEmail');
        $password = Config::get('api.apiPassword');

        $response = $this->withHeaders([
            'Accept'       => '*/*',
            'Content-type' => 'application/json',
        ])->postJson($baseUrl . '/', [
            'email'    => $email,
            'password' => $password,
        ]);

        $response->assertStatus(200)
            ->assertJsonStructure([
                'access_token', 'token_type', 'expires_in',
            ]);
    }
}
