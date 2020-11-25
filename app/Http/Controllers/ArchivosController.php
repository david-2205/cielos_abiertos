<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArchivosController extends Controller
{
    
     function getArchivo(Request $request)
    {
            //$ruta = storage_path("app/user.png");        
            $ruta = storage_path("app/" . $request->ruta);
            if (file_exists($ruta)) {
                $ruta = $ruta;
            }
        
		return response()->file($ruta);
    }
}
