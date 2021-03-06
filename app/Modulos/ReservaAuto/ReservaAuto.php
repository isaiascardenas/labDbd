<?php

namespace App\Modulos\ReservaAuto;

use Carbon\Carbon;
use App\Modulos\ReservaAuto\Auto;
use Illuminate\Database\Eloquent\Model;
use App\Modulos\Paquetes\PaqueteVueloAuto;

class ReservaAuto extends Model
{
    protected $table = 'reserva_autos';

    protected $fillable = [
        'fecha_inicio',
        'fecha_termino',
        'fecha_reserva',
        'descuento',
        'costo',
        'auto_id',
        'orden_compra_id',
    ];

    public function auto()
    {
        return $this->belongsTo(Auto::class);
    }

    public function paqueteVueloAuto()
    {
        return $this->hasOne(PaqueteVueloAuto::class, 'reserva_auto_id');
    }

    public function precio($formato = FALSE)
    {
      return $formato
                ? '$ '.number_format($this->costo, 0, ',', '.')
                : $this->costo;
    }

    public function fechaInicio($format = 'H:i d-m-Y')
    {
      return Carbon::parse($this->fecha_inicio)->format($format);
    }

    public function fechaTermino($format = 'H:i d-m-Y')
    {
      return Carbon::parse($this->fecha_termino)->format($format);
    }
}
