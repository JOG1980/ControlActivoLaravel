<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCTipoActivoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_tipo_activo', function (Blueprint $table) {
            $table->bigIncrements('tipo_activo_id');  // UNSIGNED INTEGER
            $table->string('nombre');
            $table->text('descripcion')->nullable();
            $table->foreignId('estado_registro_id')->references('estado_registro_id')->on('c_estados_registros'); //debe estar creada primero la tabla personal en la migracion???
            //$table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('c_tipo_activo');
    }
}
