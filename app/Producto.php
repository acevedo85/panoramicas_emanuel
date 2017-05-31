<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public function paquetes()
    {
        return $this->belongsToMany('App\Paquete');
    }

    protected $fillable = [
        'nombre', 'precio', 'tipo'
    ];
}
