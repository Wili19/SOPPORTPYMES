<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipo_usuarios extends Model
{
    protected $fillable = ['descripcion'];

    public function usuarios()
    {
        return $this->hasMany('App\Usuarios');
    }
}
