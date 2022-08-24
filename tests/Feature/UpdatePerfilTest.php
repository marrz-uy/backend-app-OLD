<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;
use Tymon\JWTAuth\Facades\JWTAuth;

class UpdatePerfilTest extends TestCase
{

    public function test_Actualizar_Perfil_con_valores_correctos()
    {
        $email = getenv('API_USER_EMAIL1');

        $user  = User::where('email', $email)->first();
        $token = JWTAuth::fromUser($user);

        $response = $this->withHeaders([
            'content-type'  => 'application/json',
            'Authorization' => 'Bearer' . $token,
        ])->patchJson('api/userProfile/' . $user->id, [
            'nacionalidad' => 'Paraguayo',
            'f_nacimiento' => '2015-09-23',
            'preferencias' => 'gksdgswtgdgdgdregdgdf',
        ]);

        $response->assertStatus(200);
        // $response-> asertnotequal

    }

    public function test_Actualizar_Perfil_Incorrecto__error_formato_de_fecha()
    {

        $email = getenv('API_USER_EMAIL1');

        $user  = User::where('email', $email)->first();
        $token = JWTAuth::fromUser($user);

        $response = $this->withHeaders([
            'content-type'  => 'application/json',
            'Authorization' => 'Bearer' . $token,
        ])->patchJson('api/userProfile/' . $user->id, [
            'nacionalidad' => 'Paraguayo',
            'f_nacimiento' => '2015-0',
            'preferencias' => 'gksdgswtgdgdgdregdgdf',
        ]);

        $response->assertStatus(500);

    }
}
