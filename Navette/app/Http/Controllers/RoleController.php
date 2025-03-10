<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(){
        $roles=Role::with('permission');
        return view('roles',compact('roles'));
    }
    public function create(){
        return view('formRole');
    }


}
