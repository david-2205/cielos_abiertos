<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle_Pelicula extends Model
{
      
    public $table = "detallepeliculas";
    protected $fillable =['fecha_inicio','fecha_fin','hora_inicial','hora_final','nombre_pelicula'];
  
}
