<?php

namespace App\Modulos\ReservaTraslado;

use App\Modulos\ReservaTraslado\Traslado;
use Illuminate\Database\Eloquent\Model;

class ReservaTraslado extends Model
{
    protected $table = 'reserva_traslados';

    protected $fillable = [
        'cantidad_pasajeros',
        'fecha_reserva',
        'descuento',
        'costo',
        'traslado_id',
        'orden_compra_id'
    ];

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

    public function traslado()
    {
        return $this->belongsTo(Traslado::class);
    }

    public function ordenCompra()
    {
        return $this->belongsTo(OrdenCompra::class);
    }
}
