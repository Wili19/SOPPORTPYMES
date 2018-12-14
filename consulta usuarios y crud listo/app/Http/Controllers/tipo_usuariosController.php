<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tipo_usuarios;

class tipo_usuariosController extends Controller
{
    public function index(){
        $tipo_usuario = tipo_usuarios::all();
        return $tipo_usuario;
    }

    public function selectTipousuarios(Request $request){
        $tipo_usuario = tipo_usuarios::select('id', 'descripcion')
        ->orderBy('descripcion', 'asc')->get();
        return ['tipo_usuarios' => $tipo_usuario];
    }

    public function store(Request $request)
    {
        $tipo_usuario= new tipo_usuarios();
        $tipo_usuario->descripcion =$request->descripcion;
        $tipo_usuario->save();
    }
   
    public function update(Request $request)
    {
        $tipo_usuario = tipo_usuarios::findOrFail($request->id);
        $tipo_usuario->descripcion =$request->descripcion;
        $tipo_usuario->save();
    }
}
