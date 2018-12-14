<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $fillable = ['id','idtipousuario', 'usuario', 'nombre', 'email', 'password', 'status', 'foto_perfil'];

    public function tipousuarios(){
        return $this->belongsTo('App\tipo_usuarios');
    }
}
