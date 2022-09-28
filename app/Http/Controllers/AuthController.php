<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Validator;

// use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register', 'deleteUsersAfterTesting']]);
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'    => 'required|email',
            'password' => 'required|string|min:8',
        ], [
            'email.required'    => 'El Email es obligatorio',
            'email.unique'      => 'El Email ya existe',
            'email.email'       => 'El Email debe tener un @',
            'password.required' => 'La contraseña es obligatoria',
            'password.min'      => 'La contraseña debe contener 8 caracteres minimo',
        ]
        );

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if (!$token = auth()->attempt($validator->validated())) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'                => 'required|string|email|max:100|unique:users',
            'password'             => 'required|string|min:8',
            'passwordConfirmation' => 'required|min:8|same:password',
            'name'                 => 'required|string|min:2|max:100',
        ], [
            'email.required'                => 'El Email es obligatorio',
            'email.unique'                  => 'El Email ya existe',
            'email.email'                   => 'El Email debe tener un @',
            'password.required'             => 'La contraseña es obligatoria',
            'password.min'                  => 'La contraseña debe contener 8 caracteres como minimo',
            'passwordConfirmation.required' => 'La Confirmacion de contraseña es obligatoria',
            'passwordConfirmation.same'     => 'Las Contraseñas no coinciden',
            'passwordConfirmation.min'      => 'La Confirmacion de contraseña debe tener 8 caracteres como minimo',
            'name.required'                 => 'El Usuario es Obligatorio',
            'name.min'                      => 'El Usuario debe tener 2 caracteres como minimo',
        ]
        );

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $user = User::create([
            'email'    => $request->email,
            'password' => bcrypt($request->password),
            'name'     => $request->name,
        ]);

        return response()->json([
            'message' => 'User successfully registered',
            'user'    => $user,
        ], 201);
    }

    public function userEmailUpdate(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:100|unique:users',

        ], [
            'email.required' => 'El Email es obligatorio',
            'email.unique'   => 'El Email ya existe',
            'email.email'    => 'El Email debe tener un @',
        ]
        );

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $userToUpdate = User::findOrFail($id);

        if ($userToUpdate !== null) {

            $userToUpdate->email = $request->email;
            $userToUpdate->save();

            return response()->json([
                'message' => 'Successfully updated User email',
                'user'    => $userToUpdate,
            ]);
        }
    }

    public function userNameUpdate(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:2|max:100',

        ], [
            'name.required' => 'El Usuario es Obligatorio',
            'name.min'      => 'El Usuario debe tener 2 caracteres como minimo',
        ]
        );

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $userToUpdate = User::findOrFail($id);

        if ($userToUpdate !== null) {
            $userToUpdate->name = $request->name;
            $userToUpdate->save();

            return response()->json([
                'message' => 'Successfully updated User name',
                'user'    => $userToUpdate,
            ]);
        }
    }

    public function userPasswordUpdate(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'password'             => 'required|string|min:8',
            'passwordConfirmation' => 'required|min:8|same:password',

        ], [
            'password.required'             => 'La contraseña es obligatoria',
            'password.min'                  => 'La contraseña debe contener 8 caracteres como minimo',
            'passwordConfirmation.required' => 'La Confirmacion de contraseña es obligatoria',
            'passwordConfirmation.same'     => 'Las Contraseñas no coinciden',
            'passwordConfirmation.min'      => 'La Confirmacion de contraseña debe tener 8 caracteres como minimo',
        ]
        );

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $userToUpdate = User::findOrFail($id);

        if ($userToUpdate !== null) {
            $userToUpdate->password = bcrypt($request->password);
            $userToUpdate->save();

            return response()->json([
                'message' => 'Successfully updated User password',
                'user'    => $userToUpdate,

            ]);
        }
    }

    public function logout()
    {
        auth()->logout();

        return response()->json([
            'message' => 'Successfully logged out',
        ]);
    }

    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type'   => 'bearer',
            'expires_in'   => auth()->factory()->getTTL() * 60,
            'user'         => auth()->user(),
            'status'       => 200,
            'userProfile'  => auth()->user()->profile,
        ]);
    }

    public function deleteUsersAfterTesting(Request $request)
    {
        $userDeleted3 = User::where('email', $request->user3)->first();
        $userDeleted3->delete();

        $userDeleted4 = User::where('email', $request->user4)->first();
        $userDeleted4->delete();

        $userDeleted1 = User::where('email', $request->user1)->first();
        $userDeleted1->delete();

        $userDeleted2 = User::where('email', $request->user2)->first();
        $userDeleted2->delete();

        return response()->json(['mensaje' => 'Usuarios eliminados'], 200);

    }

}
