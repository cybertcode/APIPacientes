<?php

namespace App\Http\Controllers\APISanctum;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\APISanctum\AccesoRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\APISanctum\RegistroRequest;

class AutentificarController extends Controller
{
    //Creamos nuestros métodos
    public function registro(RegistroRequest $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return response()->json(['success' => true, 'msg' => 'Usuario registrado'], 200);
    }
    public function acceso(AccesoRequest $request)
    {
        $user = User::where('email', $request->email)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'token' => ['¡ Que genio para introducir tus credenciales incorrectas!'],
            ]);
        }
        /********************************************************************
         * Almacenamos el token en la varible token y lo retornamos en json *
         ********************************************************************/
        $token = $user->createToken($request->email)->plainTextToken;
        return response()->json(['success' => true, 'msg' => $token], 200);
    }
    public function salir(Request $request)
    {
        // Revoke the token that was used to authenticate the current request...
        $request->user()->currentAccessToken()->delete();
        return response()->json(['success' => true, 'msg' => 'Token eliminado correctamente'], 200);
    }
}