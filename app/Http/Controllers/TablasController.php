<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoriap;
use App\Pelicula;
use App\Detalle_Pelicula;

class TablasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function mostrartablacategorias()
    { 
        $categoriapeli = Categoriap::all();
        return view('admin.tablacategoria' , compact('categoriapeli'));
    }

    public function mostrartablapeliculas()
    { 
        $peliculasmostrar = Pelicula::all();
        return view('admin.tablapeliculas',compact('peliculasmostrar'));
    }

    public function mostrardetallepelicula()
    { 
        $detallepelicula = Detalle_Pelicula::all();
        return view('admin.tabladetallepelicula',compact('detallepelicula'));
    }
}
