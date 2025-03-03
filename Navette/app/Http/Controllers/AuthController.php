<?php

namespace App\Http\Controllers;

use App\Models\Auth;
use App\Http\Requests\UpdateAuthRequest;
use App\Models\User;
use Illuminate\Http\Request;

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
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|min:6',
            'telephone' => 'required|min:10',
            'role_id' => '',
        ]);


        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'telephone' => $validatedData['telephone'],
            'role_id' => $validatedData['role_id'],
            'password' => bcrypt($validatedData['password'])
        ]);
    }
    public function conn(){
        return view ('connexion');
    }

    /**
     * Display the specified resource.
     */
    public function show(Auth $auth)
    {
        
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
