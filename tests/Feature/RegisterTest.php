<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
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
        $response = $this->withHeaders([
            'content-type' => 'application/json',
        ])->post(
            '/api/register',
            [
                'email' => 'martin@gmail.com',
                'password' => '12345678',
                'passwordConfirmation' => '12345678',
                'name' => 'martin',
            ]
        );

        $response = $this->get('/');
        $response->assertStatus(200);
    }
}
