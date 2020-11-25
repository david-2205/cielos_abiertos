<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function mostrarproducto()
    {
        // $crearcategoriasnuevo = Categorias::all();
        return view('admin.producto');
    }
}
