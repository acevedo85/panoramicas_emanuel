<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    //un contrato puede tener uno ó varios pedidos, pagos y anillos.
    public function pedidos(){
        return $this->hasMany('App\Pedido');
    }
    public function pagos(){
        return $this->hasMany('App\Pago');
    }
    public function anillos(){
        return $this->hasMany('App\Anillo');
    }

    //un contrato pertenece a un cliente
    public function cliente(){
        return $this->belongsTo('App\Cliente');
    }

    protected $fillable = [
            'cliente_id', 'creado_en', 'status', 'entregado_en'
    ];
}
