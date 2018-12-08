<?php

use Illuminate\Database\Seeder;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('areas')->insert([
            'nombre' => 'Recreativo',
        ]);
        DB::table('areas')->insert([
            'nombre' => 'Academico',
        ]);
    }

}
