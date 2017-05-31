<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    public function clientes(){
        return $this->hasMany('App\Cliente');
    }
    protected $fillable = [
        'school', 'career', 'nombre'
    ];
}
