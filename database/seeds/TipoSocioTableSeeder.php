<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TipoSocioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tipo_socio')->insert([
            'nombre' => 'Junior',
            'mensualidad' => '100.24',
        ]);

        DB::table('tipo_socio')->insert([
            'nombre' => 'Senior',
            'mensualidad' => '140.24',
        ]);
        DB::table('tipo_socio')->insert([
            'nombre' => 'Platium',
            'mensualidad' => '180.24',
        ]);
    }
}
