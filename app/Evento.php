<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    //referencias a la tabla Eventos
    protected $table='eventos';

    protected $primaryKey='id';
    public $timestamps=false;
    protected $fillable =[
        'fecha',
        'hora',
        'tipo',
        'precio',
        'quien_contrato',
        'confirmado',
        'cliente_id',
        'paquete_id'
    ];
}



