<?php

use Illuminate\Database\Seeder;
use App\equipamiento;

class EquipamientossTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $equip = equipamiento::create(['nombre' => 'Palos de golf']);

        DB::table('stocks')->insert([
            'cantidad' => 20,
            'id_equipamiento' => $equip->id
        ]);

        $equip = equipamiento::create(['nombre' => 'Pelotas de golf']);

        DB::table('stocks')->insert([
            'cantidad' => 10,
            'id_equipamiento' => $equip->id
        ]);

        $equip = equipamiento::create(['nombre' => 'Pelotas de futbol']);

        DB::table('stocks')->insert([
            'cantidad' => 15,
            'id_equipamiento' => $equip->id
        ]);
    }
}
