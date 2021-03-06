<?php

namespace App\Modulos\ReservaAuto;

use App\Modulos\ReservaAuto\Sucursal;
use Illuminate\Database\Eloquent\Model;
use App\Modulos\ReservaAuto\ReservaAuto;

class Auto extends Model
{
    protected $table = 'autos';

    protected $fillable = [
        'patente',
        'descripcion',
        'precio_hora',
        'capacidad',
        'sucursal_id',
    ];

    public function sucursal()
    {
        return $this->belongsTo(Sucursal::class);
    }

    public function reservaAuto()
    {
        return $this->hasMany(ReservaAuto::class);
    }

    public function precio($formato = FALSE)
    {
      return $formato
                ? '$ '.number_format($this->precio_hora, 0, ',', '.')
                : $this->precio_hora;
    }
}
