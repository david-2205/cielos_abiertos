<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    
    public $table = "peliculas";
   
    protected $fillable =['codigo_pelicula','nombre','clasificacion','duraccion',
    'sinopsis','imagen','video_estreno','url_youtube','id_categoria_peli','id_user'];

   

    function getImagenAttribute($imagen)
    {
        return route('archivo',['ruta' => $imagen]);
    }

    function getVideoEstrenoAttribute($video_estreno)
    {
        return route('archivo',['ruta' => $video_estreno]);
    }

    
    public function categorias(){
        return $this->belongsTo(Categoriap::class);    
    }
}
