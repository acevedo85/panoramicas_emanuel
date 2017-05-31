<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gasto extends Model
{
    public function cliente(){
        return $this->belongsTo('App\Cliente');
    }

    protected $fillable = [
        'fecha', 'cantidad', 'descripcion', 'user_id'
    ];
}
