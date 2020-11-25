<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelicula;
use App\Detalle_pelicula;

class WebController extends Controller
{
    
    public function mostrarsomos()
    {
        return view('web.somos');
    }

    public function mostrarcartelera()
    {
        $pelicula = Pelicula::all();
        return view('web.cartelera',compact('pelicula'));
    }

    public function mostrartaquilla()
    {
        $detallepelicula = Detalle_pelicula::all();
        return view('web.taquilla', compact('detallepelicula'));
    }

    public function mostrarconfiteria()
    {
        return view('web.confiteria');
    }

    public function boleta()
    {
        $detallepelicula = Detalle_pelicula::all();
        return view('web.boletaprimero',compact('detallepelicula'));
    }

    public function boleta2()
    {
        $detallepelicula = Detalle_pelicula::all();
        return view('web.boletados',compact('detallepelicula'));
    }

    public function boleta3()
    {
        $detallepelicula = Detalle_pelicula::all();
        return view('web.boletatres',compact('detallepelicula'));
    }

    public function boleta4()
    {
        $detallepelicula = Detalle_pelicula::all();
        return view('web.boletacuatro',compact('detallepelicula'));
    }

    
    public function boleta5()
    {
        $detallepelicula = Detalle_pelicula::all();
        return view('web.boletacinco',compact('detallepelicula'));
    }

}
