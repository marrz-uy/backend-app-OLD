<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userprofile               = new UserProfile();
        $userprofile->user_id      = $request->user_id;
        $userprofile->nacionalidad = $request->nacionalidad;
        $userprofile->f_nacimiento = $request->f_nacimiento;
        $userprofile->preferencias = $request->preferencias;
        $userprofile->save();

        return response()->json([
            'message'     => 'Successfully registered User profile',
            'userprofile' => $userprofile->user(),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // --Busca por id de userprofile--
        // return response()->json(UserProfile::find($id));

        $user = User::find($id);
        return response()->json($user->profile);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $userprofile               = UserProfile::find($request->id);
        $userprofile->nacionalidad = $request->nacionalidad;
        $userprofile->f_nacimiento = $request->f_nacimiento;
        $userprofile->preferencias = $request->preferencias;
        $userprofile->save();

        return response()->json([
            'message' => 'Successfully updated User profile',
            'user'    => $userprofile,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userDeleted = UserProfile::find($id);
        if ($userDeleted !== null) {

            $eliminate = UserProfile::destroy($id);
            return response()->json([
                'message' => 'Successfully deleted User profile',
                'user'    => $userDeleted,
            ]);
        } else {
            return response()->json([
                'message' => 'The user does not exist or does not have a user profile',
            ]);
        }
    }
}
