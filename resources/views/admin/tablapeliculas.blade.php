<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Cielo Abierto</title>    

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('imagenes/logos/CINE1.png') }}">
</head>
    <style>
.fondo{
    background-color: burlywood;
}

h3{
    color: white;
    font-size: 30px;
    font-weight: bold;
}

    </style>


<body class="fondo">
    <div class="container-fluid">
        <br>
<h3><center>TABLA PELICULAS</center></h3>
<table class="table table-bordered">
    <thead class="thead-dark" style="text-align:center">
      <tr >
        
        <th>Codigo Pelicula</th>
        <th>Nombre Pelicula</th>
        <th>Sinopsis</th>
        <th>Youtube Url</th>
      </tr>
    </thead>
    
    <tbody>
    
            @foreach ($peliculasmostrar as $fm)
            <tr style="background-color: white; ">
               

                <td class="w" data-label="Codigo Producto">
                    <h5>{{$fm->codigo_pelicula}}</h5>
                </td>

                <td data-label="Nombre">
                    <h5>{{$fm->nombre}}</h5>
                </td>

               
                <td data-label="Descripcion">
                    <h5>{{$fm->sinopsis}}</h5>
                </td>

                <td data-label="Descripcion">
                    <h5>{{$fm->url_youtube}}</h5>
                </td>
               
               {{--  <td data-label="Accion">

                    <a href="{{ route('admin.editarformulario',$fm->id) }}" class="btn btn-info">Editar</a>


                    <form method="POST" action="{{ route('admin.eliminarformulario',$fm->codigo_producto) }}">
                        @csrf
                        <button type="submit" class="btn btn-danger">
                            eliminar</button></form>



                </td>--}}
             </tr>
            @endforeach 
    
    </tbody>
  </table>
  






</div>
</body>
</html>