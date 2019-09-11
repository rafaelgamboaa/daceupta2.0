<?php

use Illuminate\Database\Seeder;

class EstadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            DB::table('estados')->insert([
                'id' => 1,
                'estado'=> 'Amazonas'
            ]);

            DB::table('estados')->insert([
                'id' => 2,
                'estado'=> 'Anzoátegui'
            ]);

            DB::table('estados')->insert([
                'id' => 3,
                'estado'=> 'Apure'
            ]);

            DB::table('estados')->insert([
                'id' => 4,
                'estado'=> 'Aragua'
            ]);

            DB::table('estados')->insert([
                'id' => 5,
                'estado'=> 'Barinas'
            ]);

            DB::table('estados')->insert([
                'id' => 6,
                'estado'=> 'Bolívar'
            ]);

            DB::table('estados')->insert([
                'id' => 7,
                'estado'=> 'Carabobo'
            ]);

            DB::table('estados')->insert([
                'id' => 8,
                'estado'=> 'Cojedes'
            ]);

            DB::table('estados')->insert([
                'id' => 9,
                'estado'=> 'Delta Amacuro'
            ]);

            DB::table('estados')->insert([
                'id' => 10,
                'estado'=> 'Falcón'
            ]);

            DB::table('estados')->insert([
                'id' => 11,
                'estado'=> 'Guárico'
            ]);

            DB::table('estados')->insert([
                'id' => 12,
                'estado'=> 'Lara'
            ]);

            DB::table('estados')->insert([
                'id' => 13,
                'estado'=> 'Mérida'
            ]);

            DB::table('estados')->insert([
                'id' => 14,
                'estado'=> 'Miranda'
            ]);

            DB::table('estados')->insert([
                'id' => 15,
                'estado'=> 'Monagas'
            ]);

            DB::table('estados')->insert([
                'id' => 16,
                'estado'=> 'Nueva Esparta'
            ]);

            DB::table('estados')->insert([
                'id' => 17,
                'estado'=> 'Portuguesa'
            ]);

            DB::table('estados')->insert([
                'id' => 18,
                'estado'=> 'Sucre'
            ]);

            DB::table('estados')->insert([
                'id' => 19,
                'estado'=> 'Táchira'
            ]);

            DB::table('estados')->insert([
                'id' => 20,
                'estado'=> 'Trujillo'
            ]);

            DB::table('estados')->insert([
                'id' => 21,
                'estado'=> 'Vargas'
            ]);

            DB::table('estados')->insert([
                'id' => 22,
                'estado'=> 'Yaracuy'
            ]);

            DB::table('estados')->insert([
                'id' => 23,
                'estado'=> 'Zulia'
            ]);

            DB::table('estados')->insert([
                'id' => 24,
                'estado'=> 'Distrito Capital'
            ]);

            DB::table('estados')->insert([
                'id' => 25,
                'estado'=> 'Dependencias Federales'
            ]);

    }


}
