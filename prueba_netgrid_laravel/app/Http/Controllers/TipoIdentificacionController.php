<?php

namespace App\Http\Controllers;

use App\Models\TipoIdentificacion;
use Illuminate\Http\Request;

class TipoIdentificacionController extends Controller
{
    public function create(Request $request){
        $tipoidentificacion = new TipoIdentificacion();
        $tipoidentificacion->id_tipoidentificacion=$request->id_tipoidentificacion;
        $tipoidentificacion->tipoidentificacion=$request->tipoidentificacion;
        $tipoidentificacion->save();

    }
    public function show($idtipoidentificacion){
        // $usurario = Usuario::join('tipoidentificacions', 'usuarios.tipo_identificacion', '=', 'tipoidentificacions.id_tipoidentificacion')->where('id_usuario', $idusuario)->get();
        $tipoidentificacion = TipoIdentificacion::where('id_tipoidentificacion', $idtipoidentificacion)->get();
        return $tipoidentificacion;
    }
    public function destroy($idtipoidentificacion){
        $tipoidentificacion = TipoIdentificacion::where('id_tipoidentificacion', $idtipoidentificacion)->get();
        $tipoidentificacion->delete();
    }
    public function edit($idtipoidentificacion){
        $tipoidentificacion = TipoIdentificacion::where('id_tipoidentificacion', $idtipoidentificacion)->get();
        return $tipoidentificacion;
    }
    public function update(Request $request, $idtipoidentificacion){
        $tipoidentificacion = TipoIdentificacion::where('id_tipoidentificacion', $idtipoidentificacion)->get();
        $tipoidentificacion->tipoidentificacion=$request->tipoidentificacion;
        $tipoidentificacion->save();
        
        return $tipoidentificacion;

    }
    public function list(){
        $tipoidentificacion = TipoIdentificacion::all();
        return $tipoidentificacion;
    }
}
