<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuarios;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        
        //if(!$request->ajax()) return redirect('/'); // protecciones para entrar en htttp para /
        $usuarios = Usuarios::all();
        return $usuarios;

        /*$buscar = $request->buscar;
        $criterio = $request->criterio;
        
        if ($buscar==''){
            $usuarios = Usuarios::join('tipo_usuarios','usuarios.idtipousuario','=','tipo_usuarios.id')
            ->select('usuarios.id', 'usuarios.nombre', 'usuarios.usuario', 'usuarios.password', 'usuarios.email','usuarios.idtipousuario',
            'tipo_usuarios.descripcion as tipouser','usuarios.status')
            ->orderBy('usuarios.id', 'desc')->paginate(4);
        }
        else{
            $usuarios = Usuarios::join('tipo_usuarios','usuarios.idtipousuario','=','tipo_usuarios.id')
            ->select('usuarios.id', 'usuarios.nombre', 'usuarios.usuario','usuarios.password', 'usuarios.email','usuarios.idtipousuario',
            'tipo_usuarios.descripcion as tipouser','usuarios.status')
            ->where('usuarios.'.$criterio, 'like', '%'. $buscar . '%')
            ->orderBy('usuarios.id', 'desc')->paginate(4);
        }
        
        
        return [
            'pagination' => [
                'total'        => $usuarios->total(),
                'current_page' => $usuarios->currentPage(),
                'per_page'     => $usuarios->perPage(),
                'last_page'    => $usuarios->lastPage(),
                'from'         => $usuarios->firstItem(),
                'to'           => $usuarios->lastItem(),
            ],
            'usuarios' => $usuarios
        ];*/
        
    }

    public function store(Request $request)
    {
        if(!$request->ajax()) return redirect('/');
        $usuario = new Usuarios();
        $usuario->idtipousuario =   $request->idtipousuario;
        $usuario->usuario = $request->usuario;
        $usuario->nombre =  $request->nombre;
        $usuario->email =   $request->email;
        $usuario->password =   $request->password;
        $usuario->status ='1';
        $usuario->save();
    }
   
    public function update(Request $request)
    {
        if(!$request->ajax()) return redirect('/');
        $usuario = Usuarios::findOrFail($request->id);
        $usuario->idtipousuario = $request->idtipousuario;
        $usuario->usuario = $request->usuario;
        $usuario->nombre = $request->nombre;
        $usuario->email = $request->email;
        $usuario->password =   $request->password;
        $usuario->status = '1';
        $usuario->save();
    }

    public function desactivar(Request $request)
    {
        if(!$request->ajax()) return redirect('/');
        $usuario = Usuarios::findOrFail($request->id);
        $usuario->status ='0';
        $usuario->save();
    }

    public function activar(Request $request)
    {
        if(!$request->ajax()) return redirect('/');
        $usuario = Usuarios::findOrFail($request->id);
        $usuario->status ='1';
        $usuario->save();
    }
}
