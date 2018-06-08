<?php

namespace App\Modulos\ReservaAuto;

use Illuminate\Database\Eloquent\Model;

class ReservaAuto extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fecha_inicio',
        'fecha_termino',
        'precio',
        'id_auto',
        'id_orden_compra',
    ];
}