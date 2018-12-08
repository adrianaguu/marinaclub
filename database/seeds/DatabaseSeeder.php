<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TipoSocioTableSeeder::class);
        $this->call(UsersTableSeede::class);
        $this->call(ServiciosTableSeede::class);
        $this->call(AreasTableSeeder::class);
        $this->call(EquipamientossTableSeeder::class);
        $this->call(EmpresasTableSeeder::class);
        $this->call(DescuentosTableSeeder::class);
    }
}
