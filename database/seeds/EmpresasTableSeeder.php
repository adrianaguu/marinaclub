<?php

use Illuminate\Database\Seeder;
use App\empresa_afiliada;

class EmpresasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $equip = empresa_afiliada::create(['ruc'=>'20726653297','rs'=>'Cine Planet','telefono'=>'989512237','direccion'=>'misti 401 yanahuara']);
        
    }
}
