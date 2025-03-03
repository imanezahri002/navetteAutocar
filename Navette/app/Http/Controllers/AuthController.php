<?php

namespace App\Http\Controllers;

use App\Models\Auth;
use App\Http\Requests\StoreAuthRequest;
use App\Http\Requests\UpdateAuthRequest;
use App\Models\User;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexCl()
    {
        return view ('registerClient');
    }
    public function indexSoc(){
        return view ('registerSociete');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAuthRequest $request)
    {
        $user = User::create([
        'name' => $request->name,
        'tel'=>$request->tel,
        'email'=>$request->email,
        'password'=>$request->password,
        'role_id' => $request->role_id,
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Auth $auth)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Auth $auth)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAuthRequest $request, Auth $auth)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Auth $auth)
    {
        //
    }
}
