<?php

namespace App\Http\Controllers;

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
        $userprofile->nacionalidad = $request->nacionalidad;
        $userprofile->f_nacimiento = $request->f_nacimiento;
        $userprofile->preferencias = $request->preferencias;
        $userprofile->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userprofile = UserProfile::find($id);
        return response()->json($userprofile);
        // return response()->json(userprofile());
        // return response()->UserProfile::find($id);
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
        return $userprofile;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userprofile = UserProfile::destroy($id);
        return $userprofile;
    }
}
