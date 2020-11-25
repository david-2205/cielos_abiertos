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
<h3><center>TABLA DETALLE PRODUCTO</center></h3>
<table class="table table-bordered">
    <thead class="thead-dark">
      <tr>

        <th>Fecha Inicio Para reseervarBoleta</th>
        <th>Fecha Final Para reseervarBoleta</th>
        <th>Hora En Que Inicia</th>
        <th>Hora En Que Termina La pelicula</th>
        <th>Nombre De La Pelicula</th>
        
      </tr>
    </thead>
    <tbody>
            @foreach ($detallepelicula as $fm)
            <tr style="background-color: white;border: 2px solid·0000;">
            
                <td class="w" data-label="Codigo Producto">
                    <h5>{{$fm->fecha_inicio}}</h5>
                </td>

                <td data-label="Nombre">
                    <h5>{{$fm->fecha_fin}}</h5>
                </td>

                <td data-label="Cantidad">
                    <h5>{{$fm->hora_inicial}}</h5>
                </td>

                <td data-label="Cantidad">
                    <h5>{{$fm->hora_final}}</h5>
                </td>

                <td data-label="Cantidad">
                    <h5>{{$fm->nombre_pelicula}}</h5>
                </td>
              {{--  
               <td data-label="Accion">
                    <a href="{{ route('admin.editarformulario',$fm->id) }}" class="btn btn-info">Editar</a>
                    <form method="POST" action="{{ route('admin.eliminarformulario',$fm->codigo_producto) }}">
                        @csrf
                        <button type="submit" class="btn btn-danger">
                            eliminar</button></form>

                </td>  --}}


             </tr>


            @endforeach

    </tbody> 
 

  </table>
  






</div>
</body>
</html>