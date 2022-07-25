<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Config;
use Tests\TestCase;

class Register_test extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    /** @test */
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
            'email'                => $email,
            'password'             => $password,
            'passwordConfirmation' => $passwordConfirmation,
            'name'                 => $name,
        ]);
        $response
            ->assertStatus(201)
            ->assertJson([
                'created' => true,
            ]);
    }
}
