<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAeropuertosTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('aeropuertos', function (Blueprint $table) {
        $table->increments('id');
        $table->string('codigo')->unique();
        $table->string('nombre');
        $table->string('direccion');
        $table->integer('ciudad_id');
        $table->foreign('ciudad_id')
                  ->references('id')
                  ->on('ciudades');
        $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('aeropuertos');
  }
}
