<?php

namespace Database\Seeders;

use App\Models\TipoActivo;  //referencia al modelo
use Illuminate\Database\Seeder;

class TipoActivoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $registro1 = new TipoActivo();
        $registro1->nombre ="PC Desktop";
        $registro1->descripcion="Computadora de escritorio";
        $registro1->estado_registro_id ="1";
        $registro1->save();

        $registro2 = new TipoActivo();
        $registro2->nombre ="Laptop";
        $registro2->descripcion="Computadora movil";
        $registro2->estado_registro_id ="1";
        $registro2->save();

        $registro3 = new TipoActivo();
        $registro3->nombre ="Telefono IP";
        $registro3->descripcion="Telefonos IP";
        $registro3->estado_registro_id ="1";
        $registro3->save();

        $registro4 = new TipoActivo();
        $registro4->nombre ="Servidor";
        $registro4->descripcion="";
        $registro4->estado_registro_id ="1";
        $registro4->save();

        $registro5 = new TipoActivo();
        $registro5->nombre ="Pantalla";
        $registro5->descripcion="Pantallas de computadora (LED, LCD, Plasma, etc.)";
        $registro5->estado_registro_id ="1";
        $registro5->save();
    }
}
