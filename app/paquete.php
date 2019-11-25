<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paquete extends Model
{
    //Creamos el modelo de la tabla paquetes de la DB | Luis Ángel Reyes

    protected $table='paquetes';
    protected $primaryKey='id';
    public $timestamps=false;
    protected $fillable=[
        'descripcion',
        'foto1',
        'foto2',
        'foto3',
        'precio',
        'activo'

    ];
}
