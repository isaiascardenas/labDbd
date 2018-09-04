<?php

namespace App\Http\Controllers\ReservaHabitacion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modulos\ReservaHabitacion\Hotel;

class HotelesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('modulos.ReservaHabitacion.index', compact("hoteles"));
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
        $hotelData = $this->validate($request , 
            [

        'estrellas' => 'required',
        'nombre' => 'required' ,
        'descripcion' => 'required',
        'ciudad_id' => 'required' 
        ]);

        return Hotel::create($hotelData);

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Hotel::find($id)->load('habitaciones');
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
    public function update(Request $request,$id)
    {

        $hotel = Hotel::find($id);
        $this->validate($request , [

        'estrellas' => 'required|integer',
        'nombre' => 'required|string',
        'descripcion' => 'required|string',
        'ciudad_id' => 'required|integer' 
        ]);


        $hotel->estrellas = $request->get('estrellas');
        $hotel->nombre = $request->get('nombre');
        $hotel->descripcion = $request->get('descripcion');
        $hotel->ciudad_id = $request->get('ciudad_id');

        $hotel->save();

        return $hotel;

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Hotel::destroy($id);
        return Hotel::all();
    }
}
