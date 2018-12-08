<?php

use Illuminate\Database\Seeder;

class UsersTableSeede extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('users')->insert([
            'name' => 'Luis Junior',
            'email' => 'luis.junior@ucsp.edu.pe',
            'password' => bcrypt('secret'),
            'id_tipo_socio' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'Marco Senior',
            'email' => 'marco.senior@ucsp.edu.pe',
            'password' => bcrypt('secret'),
            'id_tipo_socio' => 2,
        ]);

        DB::table('users')->insert([
            'name' => 'Paul Platium',
            'email' => 'paul.platium@ucsp.edu.pe',
            'password' => bcrypt('secret'),
            'id_tipo_socio' => 3,
        ]);
    }
}
