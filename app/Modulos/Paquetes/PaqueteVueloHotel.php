<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaqueteVueloHotel extends Model
{
    protected $table = 'paquete_vuelos_hoteles';

    protected $fillable = [

    	'descipcion',
    	'descuento',
    	'reserva_habitacion_id',
    	'orden_compra_id',
    ];

    public function reservaHabitacion(){
    	return $this->hasOne(reservaHabitacion::class);
    }
}