<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(EstadoSeeder::class);
        $this->call(MunicipioSeeder::class);
        $this->call(ColoniaSeeder::class);
        $this->call(LocalidadSeeder::class);
        $this->call(LocalidadSeeder2::class);
        $this->call(PruebaSeeder::class);
        $this->call(GroupSeeder::class);
    }
}
