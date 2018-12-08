<?php

use Illuminate\Database\Seeder;

class ServiciosTableSeede extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('servicios')->insert([
            'nombre' => 'Cancha de Tennis',
        ]);
        DB::table('servicios')->insert([
            'nombre' => 'Piscina',
        ]);
        DB::table('servicios')->insert([
            'nombre' => 'Cancha de Golf',
        ]);
        DB::table('servicios')->insert([
            'nombre' => 'Cancha de Futbol',
        ]);
        DB::table('servicios')->insert([
            'nombre' => 'Zona de acampar',
        ]);
    }
}
