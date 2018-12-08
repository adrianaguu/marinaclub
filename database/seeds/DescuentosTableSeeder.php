<?php

use Illuminate\Database\Seeder;
use App\descuento;


class DescuentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $des = descuento::create(['porcentaje'=>'5','empresa_id'=>'1']);
                
    }
}
