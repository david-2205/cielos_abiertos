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
    background-color: #050D28;;
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
<h3><center>ACTUALIZAR CATEGORIA</center></h3>

<div class="row">

    <div class="col-xl-2"></div>

<div class="col-xl-5">

<br>
    <form method="POST" action="{{ route('admin.actualizarformulariocategoria',$crearcategoriasnuevo->codigo_categoria) }}">
        @csrf

        <input type="text" value="{{$crearcategoriasnuevo->codigo_categoria}}">
        <br>
        <br>
        <div class="form-group text-white">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre_categoria" name="nombre_categoria" value="{{$crearcategoriasnuevo->nombre_categoria}}" >
        </div>

        <div class="form-group text-white">
            <label for="cantidad">Descripcion</label>
            <textarea id="descripcion" name="descripcion" rows="5"  cols="1"  class="form-control"  >
                {{$crearcategoriasnuevo->descripcion}}
            </textarea>
        </div>

        <br>
        <button type="submit" class="btn btn-success btn-lg btn-block" >Actualizar</button>
    </form>




</div>

<div class="col-xl-5">
    <br>
    <img class="img-top" src="{{ asset('imagenes/actualizar.jpg') }}" height="200">
    
</div>



</div>

    






</div>
</body>
</html>