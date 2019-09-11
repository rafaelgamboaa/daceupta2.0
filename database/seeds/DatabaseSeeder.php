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
        $this->call(UsuariosTableSeeder::class);
        $this->call(DepartamentosTableSeeder::class);
        $this->call(AreasTableSeeder::class);
        $this->call(EstadosTableSeeder::class);
        $this->call(CiudadesTableSeeder::class);
        $this->call(MunicipiosTableSeeder::class);
        $this->call(ParroquiasTableSeeder::class);
        $this->call(PeriodosTableSeeder::class);
    }
}
