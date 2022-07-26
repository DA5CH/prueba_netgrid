<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function create(Request $request){
        $usuario = new Usuario();
        $usuario->usuario = $request->usuario;
        $usuario->nombre_usuario = $request->nombre_usuario;
        $usuario->tipo_identificacion = $request->tipo_identificacion;
        $usuario->identificacion_usuario = $request->identificacion_usuario;
        $usuario->fecha_nacimiento_usuario = $request->fecha_nacimiento_usuario;
        $usuario->password_usuario = $request->password_usuario;
        $usuario->save();
        return $usuario;
    }
    public function show($idusuario){
        // $usuario = Usuario::join('tipoidentificacions', 'usuarios.tipo_identificacion', '=', 'tipoidentificacions.id_tipoidentificacion')->where('id_usuario', $idusuario)->get();
        $usuario = Usuario::where('id_usuario', $idusuario)->get();
        return $usuario;
    }
    public function destroy($idusuario){
        $usuario = Usuario::where('id_usuario', $idusuario)->get();
        $usuario->delete();
    }
    public function edit($idusuario){
        $usuario = Usuario::where('id_usuario', $idusuario)->get();
        return $usuario;
    }
    public function update(Request $request,$idusuario){
        $usuario = Usuario::where('id_usuario', $idusuario)->get();
        $usuario->usuario = $request->usuario;
        $usuario->nombre_usuario = $request->nombre_usuario;
        $usuario->tipo_identificacion = $request->tipo_identificacion;
        $usuario->identificacion_usuario = $request->identificacion_usuario;
        $usuario->fecha_nacimiento_usuario = $request->fecha_nacimiento_usuario;
        $usuario->password_usuario = $request->password_usuario;
        $usuario->save();
        return $usuario;

    }
    public function list(){
        $usuarios = Usuario::select()->join('tipoidentificacions', 'usuarios.tipo_identificacion', '=', 'tipoidentificacions.id_tipoidentificacion')->get();
        return response()->json($usuarios);
    }
}
