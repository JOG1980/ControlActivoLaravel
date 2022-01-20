<?php

namespace Database\Seeders;

use App\Models\EstadoRegistro;  //referencia al modelo
use Illuminate\Database\Seeder;

class EstadoRegistroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $registro1 = new EstadoRegistro();
        $registro1->nombre ="Normal";
        $registro1->descripcion="Registro en condiciones normales";
        $registro1->save();

        $registro2 = new EstadoRegistro();
        $registro2->nombre ="Pendiente";
        $registro2->descripcion="Registro pendiente, inconcluso, etc.";
        $registro2->save();

        $registro3 = new EstadoRegistro();
        $registro3->nombre ="Revision";
        $registro3->descripcion="Registro que requiere revisión.";
        $registro3->save();

        $registro4 = new EstadoRegistro();
        $registro4->nombre ="Duplicado";
        $registro4->descripcion="Registro duplicado en condiciones normales.";
        $registro4->save();
        
        $registro5 = new EstadoRegistro();
        $registro5->nombre ="Duplicado en Cascada";
        $registro5->descripcion="Registro duplicado en cascada. Normalmente requiere revisión";
        $registro5->save();
    }
}
