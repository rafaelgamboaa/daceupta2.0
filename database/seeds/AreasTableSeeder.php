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
        DB::table('areas')->insert([
            'area'=>'Programación',
        ]);
        DB::table('areas')->insert([
            'area'=>'Ingenieria del Software',
        ]);
        DB::table('areas')->insert([
            'area'=>'Seguridad Informatica',
        ]);
        DB::table('areas')->insert([
            'area'=>'Base de Datos',
        ]);
        DB::table('areas')->insert([
            'area'=>'Diseño',
        ]);
        DB::table('areas')->insert([
            'area'=>'Matematica',
        ]);
        DB::table('areas')->insert([
            'area'=>'Socio Critica',
        ]);
        DB::table('areas')->insert([
            'area'=>'Proyecto Socio Tecnologico',
        ]);
    }
}
