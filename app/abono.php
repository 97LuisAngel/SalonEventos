<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class abono extends Model
{
    //Creamos el modelo de la tabla abonos de la DB | Luis Ángel Reyes
    protected $table = 'abonos';
    protected $primaryKey='id';
    public $timestamps=false;
    protected $fillable=[
        'evento_id',
        'fecha',
        'monto',
        'quien_recibio'

    ];
}
