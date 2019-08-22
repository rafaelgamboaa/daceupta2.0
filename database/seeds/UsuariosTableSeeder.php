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
            'email'=>'gamboarafael@gmail.com',
            'password'=>bcrypt('qwerty')
        ]);
    }
}
