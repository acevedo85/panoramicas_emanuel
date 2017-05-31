<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $fillable = [
        'nombre', 'fecha' , 'lugar' ,'hora'
    ];
}
