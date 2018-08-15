<?php

namespace App;

use App\Pais;
use App\Modulos\ReservaHotel\Hotel;
use App\Modulos\ReservaAuto\Sucursal;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table = 'ciudades';

    protected $fillable = [
        'nombre',
        'pais_id',
    ];

    public function pais()
    {
        return $this->belongsTo(Pais::class);
    }

    public function sucursal()
    {
        return $this->belongsTo(Sucursal::class);
    }

    public function hoteles()
    {
        return $this->hasMany(Hotel::class);
    }
}
