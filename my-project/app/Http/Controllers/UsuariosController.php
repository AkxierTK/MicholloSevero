<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Exception;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    //
    public function crear(Request $request){
        try{
            $usuarioComrpueba=Usuario::where("email",$request->email);
        }catch(Exception $e){};
        if(!isset($usuarioComrpueba)){
            $nuevoUsuario = new Usuario();
            $nuevoUsuario -> nombreUsuario = $request -> nombreUsuario;
            $nuevoUsuario -> email = $request -> email;
            $nuevoUsuario -> contraseña = $request -> contraseña;
            $nuevoUsuario -> save();
            return view('Inicio');
        }else{
            return back();
        }
    }
    public function acceder(Request $request){
        try{
            $usuarioComrpueba=Usuario::where("email",$request->email)->where("contraseña",$request->contraseña);
        }catch(Exception $e){};
        if(isset($usuarioComrpueba)){
            $id=$usuarioComrpueba->id;
            return view('Inicio',compact("id"));
        }else{
            return back();
        }
    }
}
