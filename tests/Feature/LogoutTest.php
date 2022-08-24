<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Support\Facades\Config;
use Tests\TestCase;
use Tymon\JWTAuth\Facades\JWTAuth;

class LogoutTest extends TestCase
{
    public function test_Logout_Correcto()
    {

        $email                = Config::get('api.apiEmail1');
        $password             = Config::get('api.apiPassword1');

        //Se hace Login con usuario para generar el JWToken
        $response = $this->withHeaders([
            'Content-type' => 'application/json',
        ])->postJson('/api/login', [
            'email'                => $email,
            'password'             => $password,
        ]);

        //Se recupera el usuario y su JWToken
        $user  = User::where('email', Config::get('api.apiEmail1'))->first();
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
