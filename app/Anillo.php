<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anillo extends Model
{
    //un anillo pertenece a un contrato
    public function contrato(){
        return $this->belongsTo('App\Contrato');
    }

    protected $fillable = [
      'contrato_id', 'type', 'weight', 'size', 'cost'
    ];
}
