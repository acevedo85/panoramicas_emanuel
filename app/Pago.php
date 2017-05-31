<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    //un pago pertenece a un contrato
    public function contrato(){
        return $this->belongsTo('App\Contrato');
    }

    protected $fillable = [
      'contrato_id', 'amount', 'date_pay'
    ];
}
