<?php

use App\Pais;
use Illuminate\Database\Seeder;

class PaisesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Pais::class, 5)->create();
        Pais::create([
        	'id' => 999,
        	'nombre' => 'Chile']);
    }
}
