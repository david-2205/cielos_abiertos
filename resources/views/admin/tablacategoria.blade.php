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
<h3><center>TABLA CATEGORIA</center></h3>
<table class="table table-bordered">
    <thead class="thead-dark" style="text-align: center">
      <tr>
        <th>Id</th>
        <th>Codigo Categoria</th>
        <th>Nombre Categoria</th>
        <th>Descripciòn</th>
        <th style="background-color:white;color: black">Accion</th>
        
      </tr>
    </thead>
    <tbody>
    
            @foreach ($categoriapeli as $fm)
            <tr style="background-color: white;border: 2px solid·0000;">
                <td data-label="No">
                    <h5>{{$fm->id}}</h5>
                </td>

                <td class="w" data-label="Codigo Producto">
                    <h5>{{$fm->codigo_categoria}}</h5>
                </td>

                <td data-label="Nombre">
                    <h5>{{$fm->nombre_categoria}}</h5>
                </td>

                <td data-label="Cantidad">
                    <h5>{{$fm->descripcion}}</h5>
                </td>
               
                <td data-label="Accion" style="background-color:black">

                    <a href="{{ route('admin.editar_categoria',$fm->id) }}" class="btn btn-info">Editar</a>


                   {{--  <form method="POST" action="{{ route('admin.eliminarformulario',$fm->codigo_producto) }}">
                        @csrf
                        <button type="submit" class="btn btn-danger">
                            eliminar</button></form> --}}

                </td>
            </tr>
            @endforeach
    

    
    </tbody>
  </table>
  



</div>

{{-- javascrips --}}
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/popper.min.js') }}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>



</body>
</html>