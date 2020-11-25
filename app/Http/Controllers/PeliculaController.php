<?php

namespace App\Http\Controllers;
use Response;
use Illuminate\Http\Request;

use App\Pelicula;
use App\Categoriap;

class PeliculaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function mostrarpelicula()
    {
         $crearcategoriasnuevo = Categoriap::all();
        return view('admin.pelicula',compact('crearcategoriasnuevo'));
    }

    public function guardarpeliculas(Request $request)
    {

    
      
        $crearpelicula = new Pelicula();

        $crearpelicula->codigo_pelicula = $request->codigo_pelicula ;
        $crearpelicula->nombre = $request->nombre;
        $crearpelicula->clasificacion = $request->clasificacion;
        $crearpelicula->duraccion = $request->duraccion;
        $crearpelicula->sinopsis = $request->sinopsis;
        $crearpelicula->url_youtube= $request->url_youtube;
        $crearpelicula->id_categoria_peli= $request->id_categoria_peli;
        $crearpelicula->id_user= $request->id_user;

        
        if($imagen = $this->imagenes_file($request)){
            $crearpelicula->imagen = $imagen;
        }

        if($video_estreno = $this->video_file($request)){
            $crearpelicula->video_estreno = $video_estreno;
        }


        $crearpelicula->save();
        
        return back()->with('flash', "Pelicula Guardada Correctamente");
/* 
        if($crearpelicula->save()){
            return response()->json([ 'status'=>'success']);
        }else{
            return response()->json(['error' => $validator]);
        } */
       
    }

    private function imagenes_file($request){
        if($request->hasFile('imagen')){
            return $request->imagen->store('Art_Imagenes');
        }
        return null;
    } 

    private function video_file($request){
        if($request->hasFile('video_estreno')){
            return $request->video_estreno->store('Art_Video');
        }
    } 










}
