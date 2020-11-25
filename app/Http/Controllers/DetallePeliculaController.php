<?php

namespace App\Http\Controllers;
use Response;
use Illuminate\Http\Request;
use App\Pelicula;
use App\Detalle_Pelicula;

class DetallePeliculaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function mostrarDetallePelicula()
    {
        $crearpelicula = Pelicula::all();
        return view('admin.detalle_pelicula',compact('crearpelicula'));
    }

    public function guardardetallepeliculas(Request $request)
    {
        // return $request;
       
        $validator = $request->validate([
            
            'nombre_pelicula' => 'required', 
               'fecha_inicio' => 'required',
                  'fecha_fin' => 'required',
               'hora_inicial' => 'required',  
                 'hora_final' => 'required',   

        ]);



        $creardetalepe = new Detalle_Pelicula();

        $creardetalepe->nombre_pelicula = $request->nombre_pelicula;
        $creardetalepe->fecha_inicio = $request->fecha_inicio;
        $creardetalepe->fecha_fin = $request->fecha_fin;
        $creardetalepe->hora_inicial = $request->hora_inicial;
        $creardetalepe->hora_final = $request->hora_final;
        
       

        if($creardetalepe->save()){

            return response()->json([ 'status'=>'success']);

        }else{
            return response()->json(['error' => $validator]);
        }
    

      /*   $creardetalepe->save();
        
        return back(); */
    }

}
