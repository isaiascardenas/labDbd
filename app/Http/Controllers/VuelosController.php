<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tramo;

class VuelosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // El array de abajo deberia salir desde este metodo
    	// $data["vuelos"] = Tramo::latest()->filter(request())->get();
    	
    	$data["vuelos"] = [
    		["id" => 1, "aerolinea" => "LATAM", "codigo" => "LA281", "aeropuerto_origen" => "SCL", "hora_partida" => "03:39", "aeropuerto_destino" => "PUQ", "hora_llegada" => "08:02", "duracion" => "3h 23m", "escalas" => "Directo", "precio" => "$47.539"],
    		["id" => 2, "aerolinea" => "LATAM", "codigo" => "LA293", "aeropuerto_origen" => "SCL", "hora_partida" => "10:39", "aeropuerto_destino" => "PUQ", "hora_llegada" => "15:02", "duracion" => "3h 23m", "escalas" => "Directo", "precio" => "$56.539"],
    		["id" => 3, "aerolinea" => "LATAM", "codigo" => "LA285", "aeropuerto_origen" => "SCL", "hora_partida" => "14:00", "aeropuerto_destino" => "PUQ", "hora_llegada" => "19:48", "duracion" => "4h 48m", "escalas" => "1 parada", "precio" => "$124.539"],
    		["id" => 4, "aerolinea" => "LATAM", "codigo" => "LA273", "aeropuerto_origen" => "SCL", "hora_partida" => "12:00", "aeropuerto_destino" => "PUQ", "hora_llegada" => "19:48", "duracion" => "6h 23m", "escalas" => "1 parada", "precio" => "$198.078"]
    	];

        return view('modulos.ReservaVuelo.list', compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vuelo = Tramo::find($id);

        return view('modulos.ReservaVuelo.show', compact("vuelo"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function reserva(Tramo $vuelo)
    {
    	// Agrega al carro y redirige a /carta
        return view('cart');
    }
}