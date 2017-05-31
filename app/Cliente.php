<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Cliente extends Model
{
    protected $fillable = [
        'name', 'paterno', 'materno', 'address', 'generation', 'phone', 'email', 'grupo_id'
    ];

    //un cliente puede tener uno o mas contratos
    public function contratos(){
        return $this->hasMany('App\Contrato');
    }

    public function grupo(){
        return $this->belongsTo('App\Grupo');
    }

    //use Searchable;
}
