<?php

use Illuminate\Database\Seeder;

class DepartamentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departamentos')->insert([
            'codigo'=>'PNFA',
            'departamento'=>'Administración'
        ]);
        DB::table('departamentos')->insert([
            'codigo'=>'PNFI',
            'departamento'=>'Informatica'
        ]);
        DB::table('departamentos')->insert([
            'codigo'=>'PNFC',
            'departamento'=>'Contaduria'
        ]);
    }
}
