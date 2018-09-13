<?php

namespace App\Http\Controllers;

use App\Ciudad;
use Carbon\Carbon;
use App\Modulos\ReservaVuelo\Aeropuerto;
use App\Modulos\ReservaHabitacion\Hotel;
use App\Modulos\ReservaVuelo\TipoAsiento;
use App\Modulos\ReservaHabitacion\Habitacion;
use App\Modulos\Paquetes\PaqueteVueloHotel;
use App\Modulos\Paquetes\PaqueteVueloAuto;

class HomeController extends Controller
{

    public function index()
    {
        $ciudades = Ciudad::all();
        $tipoPasaje = TipoAsiento::all();
        $aeropuertos = Aeropuerto::all();
        $hoteles = Hotel::all();
        $habitaciones = Habitacion::all();
        $paquetesVH = PaqueteVueloHotel::all();
        $paquetesVA = PaqueteVueloAuto::all();

        return view('home', compact(
            'autos',
            'hoteles',
            'paquetesVA',
            'paquetesVH',
            'ciudades',
            'sucursales',
            'tipoPasaje',
            'actividades',
            'habitaciones',
            'aeropuertos'
        ));
    }
}

