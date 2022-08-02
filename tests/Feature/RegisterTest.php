<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Config;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    public function test_Registro_con_valores_correctos()
    {
        $baseUrl = Config::get('app.url') . 'api/register';

        $email                = Config::get('api.apiEmail');
        $password             = Config::get('api.apiPassword');
        $passwordConfirmation = Config::get('api.apiPasswordConfirmation');
        $name                 = Config::get('api.apiName');

        $response = $this->withHeaders([
            'content-type' => 'application/json',
        ])->postJson($baseUrl . '/', [
            'email'                => 'martin@gmail.com',
            'password'             => '12345678',
            'passwordConfirmation' => '12345678',
            'name'                 => 'martin',
        ]);
        $response = $this->get('/')->assertStatus(201);
    }
}
