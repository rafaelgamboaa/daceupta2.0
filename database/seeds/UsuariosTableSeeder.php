<?php

use Illuminate\Database\Seeder;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'rafael',
            'email'=>'gamboarafael999@gmail.com',
            'password'=>bcrypt('qwerty')
        ]);
        DB::table('users')->insert([
            'name'=>'javier',
            'email'=>'javier5@gmail.com',
            'password'=>bcrypt('qwerty')
        ]);
    }
}
