<?php

namespace App\Http\Controllers;
use Response;
use Illuminate\Http\Request;
use App\Categoriap;

class CategoriaController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function mostrarcategoria()
    {
     $crearcategoriasnuevo = Categoriap::all();
        return view('admin.categoria',compact('crearcategoriasnuevo'));
    }


    public function guardar_categoria(Request $request)
    {
        $validator = $request->validate([
            
            'codigo_categoria' => 'required', 'max:9',
            'nombre_categoria' => 'required','max:255',
                 'descripcion' => 'required',    

        ]);


        $crearcategoriasnuevo = new Categoriap();

        $crearcategoriasnuevo->codigo_categoria = $request->codigo_categoria; 
        $crearcategoriasnuevo->nombre_categoria = $request->nombre_categoria;
        $crearcategoriasnuevo->descripcion = $request->descripcion;
                
        if($crearcategoriasnuevo->save()){
            return response()->json([ 'status'=>'success']);
        }else{
            return response()->json(['error' => $validator]);
        }

    }

    public function editarformulariocategoria(Request $request)
    {
        $crearcategoriasnuevo = Categoriap::where('id', $request->id)->firstOrFail();
        return view('admin.editar_categoria', compact('crearcategoriasnuevo'));
    }

    public function actualizarformulariocategoria(Request $request)
    {

       $crearcategoriasnuevo = Categoriap::where('codigo_categoria', $request->codigo_categoria)->firstOrFail();

       $crearcategoriasnuevo->nombre_categoria = $request->nombre_categoria;
       $crearcategoriasnuevo->descripcion = $request->descripcion;
       

        $crearcategoriasnuevo->save();

        return redirect('tablacategoria');
    }




}
