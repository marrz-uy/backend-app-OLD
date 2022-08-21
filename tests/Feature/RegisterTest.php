<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Config;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    public function test_Registro_con_valores_correctos()
    {
        
        $response = $this->withHeaders([
            'content-type' => 'application/json',
        ])->postJson('/api/register', [
            'email'                => 'juancho@gmail.com',
            'password'             => '123456',
            'passwordConfirmation' => '123456',
            'name'                 => 'juancho',
        ]);
        $response = $this->get('/')->assertStatus(200);
    }
}
