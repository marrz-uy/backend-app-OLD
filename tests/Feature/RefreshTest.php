<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Support\Facades\Config;
use Tests\TestCase;
use Tymon\JWTAuth\Facades\JWTAuth;

class RefreshTest extends TestCase
{
    public function test_Refresh_token()
    {   
       
        //Se recupera el usuario y su JWToken
        $user  = User::where('email', Config::get('api.apiEmail1'))->first();
        $token = JWTAuth::fromUser($user);

        $response = $this->withHeaders([
            'Content-type' => 'application/json',
        ])->postJson('/api/refresh?token=' . $token, []);

        $response->assertStatus(200);
        $response->assertJsonStructure(["access_token"]);
        $response->assertJsonStructure(["token_type"]);
        $response->assertJsonStructure(["expires_in"]);
    }
}
