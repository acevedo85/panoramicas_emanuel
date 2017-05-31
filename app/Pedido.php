<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    //un pedido pertenece a un contrato
    public function paquete(){
        return $this->belongsTo('App\Contrato');
    }

    protected $fillable = [
      'contrato_id', 'model', 'base_color', 'plaque_color', 'plaque_model', 'plaque_model', 'picture', 'text_number', 'dedicated_to', 'anexos', 'package', 'cost'
    ];
}
