<?php

use Carbon\Carbon;
use Faker\Generator as Faker;
use App\Modulos\ReservaVuelo\Tramo;


$factory->define(Tramo::class, function (Faker $faker) {
    $aeropuertos = DB::table('aeropuertos')->select('id')->get();
    $aviones = DB::table('aviones')->select('id')->get();

    $fechaPartida = Carbon::createFromTimeStamp($faker->dateTimeBetween('+10 days', '+100 days')->getTimestamp());
    $fechaLlegada = Carbon::createFromFormat('Y-m-d H:i:s', $fechaPartida)->addHours(mt_rand(1,5));

    return [
        'codigo'    => $faker->unique()->regexify('[A-Z]{2}[0-9]{3}'),
        'fecha_partida' => $fechaPartida,
        'fecha_llegada' => $fechaLlegada,
        'avion_id'    => $aviones->random()->id,
        'origen_id'   => $aeropuertos->random()->id,
        'destino_id'  => $aeropuertos->random()->id
    ];
});
