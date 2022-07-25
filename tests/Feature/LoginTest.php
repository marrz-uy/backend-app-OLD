<?php

namespace Tests\Feature;

use Tests\TestCase;

class LoginTest extends TestCase
{

    public function testLogin()
    {
        $baseUrl  = Config::get('app.url') . '/api/auth/login';
        $email    = Config::get('api.apiEmail');
        $password = Config::get('api.apiPassword');

        $response = $this->json('POST', $baseUrl . '/', [
            'email'    => $email,
            'password' => $password,
        ]);

        $response
            ->assertStatus(200)
            ->assertJsonStructure([
                'access_token', 'token_type', 'expires_in',
            ]);
    }
}
