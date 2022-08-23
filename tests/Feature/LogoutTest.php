<?php

namespace Tests\Feature;

use Tests\TestCase;
use Tymon\JWTAuth\Facades\JWTAuth;


class LogoutTest extends TestCase
{
    public function test_Logout()
    {
        $user = 'juancito@gmail.com';
        $token = JWTAuth::fromUser($user);
    
        $response = $this->withHeaders([
            'Content-type' => 'application/json',
        ])->postJson('/api/logout?token=' . $token, []);
    
        $response
            ->assertStatus(200)
            ->assertExactJson([
                'message' => 'Successfully logged out',
            ]);
    }
}

