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
        try{
        $request->validate([
            'name' => 'required|string|max:150|min:5',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|string|min:5'
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

        ],201);
        } catch (\Illuminate\Validation\ValidationException $e) {
            if ($e->errors()['email'][0] === 'The email has already been taken.') {
                return response()->json(['status' => 0, 'msg' => 'El correo electrónico ya está en uso'], 400);
            } else {
                return response()->json(['status' => 0, 'msg' => 'Error al registrar el usuario'], 500);
            }
        }
    }

    public function login(Request $request)
    {   
        try{
            $request->validate([
                'email' => 'required|email',
                'password' => 'required'
            ]);

            $user = User::where('email', '=', $request->email)->first();
            
            if (!$user) {
                return response()->json(['status' => 0, 'msg' => 'Credenciales incorrectas'], 401);
            }
        
            if (Hash::check($request->password, $user->password)) {
                $token = $user->createToken('auth_token')->plainTextToken;

                 return response()->json([
                'status' => 1,
                'msg' => 'Inicio de sesión correctamente',
                'access_token' => $token
                ]);

            }else{
                return response()->json(['status' => 0, 'msg' => 'Credenciales incorrectas'], 401);
            }
            
        }catch (\Exception $e) {
            return response()->json(['status' => 0, 'msg' => 'Error al iniciar sesión'], 500);
        }
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
        try {
            auth()->user()->tokens()->delete();
            
            return response()->json([
                'status' => 1,
                'msg' => 'Sesión cerrada'
            ]);

        } catch (\Exception $e) {
            return response()->json(['status' => 0, 'msg' => 'Error al cerrar la sesión'], 500);
        }
    }
}
