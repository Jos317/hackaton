<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function login(Request $request)
    {   
        $user = User::select('id', 'name','email', 'telefono')->where('email', $request->email)->first();
        try {
            if ($user != null) {
                // $user2 = User::where('password', Hash::make($request->password))->first();
                // if ($user2 == null) {
                //     return response()->json(['mensaje' => 'contraseña incorrecta'], 401);
                // }
                return response()->json(['mensaje' => 'Consulta exitosa', 'data' => $user], 200);
            }
            return response()->json(['mensaje' => 'email incorrecto'], 401);
        } catch (\Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    }
}
