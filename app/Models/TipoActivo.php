<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoActivo extends Model
{
    use HasFactory;

    //debido a que laravel al momento de crear modelos  se nombran en singular y el automaticamente los referencia a  tablas con nombre en plural (en ingles) puede haber un error de referencia si se hace en otro idioma (diferente al ingles).
    //en este caso nuestra tabla se llama "c_tipo_activos" y su modelo es "TipoActivo" existe un error de referencia.
    //Para esto cambiamos la referencia de la tabla con la siguiente linea protected $table="c_tipo_activo"
    protected $table="c_tipo_activos";
}
