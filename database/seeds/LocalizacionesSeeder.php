<?php

use App\Localizacion;
use Illuminate\Database\Seeder;

class LocalizacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Localizacion::class, 150)->create();
    }
}
