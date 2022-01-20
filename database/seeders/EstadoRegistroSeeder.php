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
        $estado_registro1 = new EstadoRegistro();
        $estado_registro1->nombre ="Normal";
        $estado_registro1->descripcion="Registro en condiciones normales";
        $estado_registro1->save();

        $estado_registro2 = new EstadoRegistro();
        $estado_registro2->nombre ="Pendiente";
        $estado_registro2->descripcion="Registro pendiente, inconcluso, etc.";
        $estado_registro2->save();

        $estado_registro3 = new EstadoRegistro();
        $estado_registro3->nombre ="Revision";
        $estado_registro3->descripcion="Registro que requiere revisión.";
        $estado_registro3->save();

        $estado_registro4 = new EstadoRegistro();
        $estado_registro4->nombre ="Duplicado";
        $estado_registro4->descripcion="Registro duplicado en condiciones normales.";
        $estado_registro4->save();

        $estado_registro5 = new EstadoRegistro();
        $estado_registro5->nombre ="Duplicado en Cascada";
        $estado_registro5->descripcion="Registro duplicado en cascada. Normalmente requiere revisión";
        $estado_registro5->save();
    }
}
