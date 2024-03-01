<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);


        $user->save();

        $token = $user->createToken('auth_token')->plainTextToken;


        return response()->json([
            'status' => 1,
            'msg' => 'Registrado correctamente',
            'access_token' => $token

        ]);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', '=', $request->email)->first();

        if (isset($user->id)) {
            if (Hash::check($request->password, $user->password)) {
                $token = $user->createToken('auth_token')->plainTextToken;
            }
            return response()->json([
                'status' => 1,
                'msg' => 'Inicio de sesión correctamente',
                'access_token' => $token
            ]);
        };
    }
    public function userProfile()
    {
        return response()->json([
            'status' => 1,
            'msg' => 'Perfil de usuario',
            'data' => auth()->user()
        ]);
    }
    public function logout()
    {
        auth()->user()->tokens()->delete();
        return response()->json([
            'status' => 1,
            'msg' => 'Sesión cerrada',

        ]);
    }
}
