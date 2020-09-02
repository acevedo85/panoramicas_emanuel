<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
    protected $fillable = [
        'nombre', 'precio', 'descripcion', 'segunda'
        ];
 /*   //un paquete puede tener uno o varios pedidos
    public function pedidos()
    {
        return $this->hasMany('App\Pedido');
    }*/
}
