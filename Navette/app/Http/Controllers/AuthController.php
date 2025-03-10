<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateAuthRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexCl()
    {
        return view('registerClient');
    }
    public function indexSoc(){
        return view('registerSociete');
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
        ]);


        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'telephone' => $validatedData['telephone'],
            'role_id' => 2,
            'password' => bcrypt($validatedData['password'])
        ]);
        Auth::login($user);
        return view('client.homePage');
    }
    public function conn(){
        return view ('connexion');
    }

    /**
     * Display the specified resource.
     */
    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt($validatedData)) {
            return redirect('/homepage');
        } else {
            return back()->withErrors(['email' => 'Les informations de connexion sont incorrectes.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Auth $auth)
    {
        //
    }
}
