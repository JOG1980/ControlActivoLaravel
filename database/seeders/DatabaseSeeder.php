<?php

namespace Database\Seeders;


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
        // \App\Models\User::factory(10)->create();

        //SEEDERS PRODUCTIVO ---------------

        $this->call(EstadoRegistroSeeder::class);  //invocamos el seeder
        $this->call(TipoActivoSeeder::class);  //invocamos el seeder

        //SEEDERS TEST ---------------
        
    }
}
