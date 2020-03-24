<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $fillable = [
        'descripcion', 'urgencia',
    ];

    //tarea terminado
    public function scopeTerminado($query){

        return $query->where('terminado','1');
    }

    //tarea sin terminar
    public function scopeSinterminar($query){

        return $query->where('terminado','0');
    }
}
