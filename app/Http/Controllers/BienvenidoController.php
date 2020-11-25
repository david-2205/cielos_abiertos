<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelicula;

class BienvenidoController extends Controller
{
    
    public function mostrar_bienvenido(){
        $pelicula = Pelicula::all();
        return view('bienvenido', compact("pelicula"));
    }

}
