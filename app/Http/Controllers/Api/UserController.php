<?php

namespace App\Http\Controllers\Api;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class UserController extends Controller
{
    public function registrer(Request $request) {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|confirmed'
        ]);

        $user = new User();
        $user->name->$request->name;
        $user->email->$request->email;
        $user->password->$request->password;

        $user->save();
        //rutas / api /endpoint

    }

}
