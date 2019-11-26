<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UsuarioRequest;
use App\Usuario;
class UsuarioController extends Controller
{
    public function store(UsuarioRequest $request){
        $validated = $request->validated();
        $usuario=new Usuario();
        $usuario->nombre=$request->nombre;
        $usuario->apellido=$request->apellido;
        $usuario->correo=$request->email;
        $usuario->contraseña=$request->contraseña;
        $usuario->save();
        return view('/inicio');
    }
}
