<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoriap extends Model
{
    
    public $table = "categorias";
   
    protected $fillable =['codigo_categoria','nombre_categoria','descripcion'];

    public function peliculas() {
        return $this->hasMany(Pelicula::class);
    }

}
