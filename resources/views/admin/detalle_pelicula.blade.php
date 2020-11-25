<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Cielo Abierto</title>

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/stilo-admin.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sweetalert2.min.css') }}" type="text/css" rel="stylesheet">


    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('imagenes/logos/CINE1.png') }}">
 

    <header>
        <div class="sidebar">
            <a class="active texto" href="/admin">Home</a>
            <a href="{{ route('categoria') }}">Categoria</a>
            <a href="{{ route('pelicula') }}">Peliculas</a>
            <a href="{{ route('detalle_pelicula') }}">Detalle Pelicula</a>
            <a href="{{ route('producto') }}">Productos</a>
        </div>
    </header>
</head>
<body style="background-color:#050D28;">

    <div class="content">

        <header>
            <br>


            <div class="row">
                <div class="col-xl-3"></div>

                <div class="col-xl-5">

                    <h3>
                        <center style="color:white">BIENVENIDO ADMISTRADOR</center>
                    </h3>
                </div>

                <div class="col-xl-2"></div>

                <div class="col-xl-2">
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="font-size: 20px;position: absolute;top: -10px;">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </div>


            </div>




        </header>

    <div class="container">
        <div class="row">

            <div class="col-xl-12">
      <form  action="" id="formulario" method="POST" enctype="multipart/form-data" >
        
        {{ csrf_field() }}

        <div class="form-group text-white">
            <label for="disabledSelect">Pelicula</label>
            <select id="nombre_pelicula" name="nombre_pelicula" class="form-control">
                @foreach ($crearpelicula as $fm)
                <option>{{$fm->nombre}}</option>
                @endforeach
            </select>

        </div>

        <div class="form-group text-white">
            <label for="formGroupExampleInput">Fecha De Inicio</label>
            <input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio" placeholder="Fecha">
        </div>

        <div class="form-group text-white">
            <label for="formGroupExampleInput">Fecha Final Plazo</label>
            <input type="date" class="form-control" name="fecha_fin" id="fecha_fin" placeholder="Fecha">
        </div>

        <div class="form-group text-white">
          <label for="formGroupExampleInput">Hora Inicial</label>
          <input type="text" class="form-control" name="hora_inicial" id="hora_inicial" placeholder="Hora_Inicial">
        </div>

        <div class="form-group text-white">
          <label for="formGroupExampleInput2">Hora Final</label>
          <input type="text" class="form-control" name="hora_final" id="hora_final" placeholder="Hora_Final">
        </div>

        <div class="row">

            <div class="col-xl-2">
            </div>

            <div class="col-xl-4">
                <button type="button" class="btn btn-primary btn-lg btn-block" id="guardar_detallepelicula">Guardar</button>
            </div>
            

            <div class="col-xl-4">
                <a href="{{ route('tabladetallepelicula')}}" class="btn btn-info btn-lg  btn-block" role="button" >VerTabla</a>
            </div>

        </div>


      </form>
      
            </div>
        </div>

    </div>
</div>

    {{-- javascrip --}}
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{asset('js/custom.min.js') }}"></script>
    <script src="{{asset('js/validacionnumero_letras.js')}}"></script>
    <script src="{{ asset('js/sweetalert2.min.js') }}"></script>

    <script>

        $("#guardar_detallepelicula").click(function () {    
            let nombre_pelicula = $("#nombre_pelicula").val();
            let fecha_inicio = $("#fecha_inicio").val();
            let fecha_fin = $("#fecha_fin").val();
            let hora_inicial = $("#hora_inicial").val();
            let hora_final = $("#hora_final").val();

            var form_data;
            var form_data=new FormData();
            form_data.append('nombre_pelicula',nombre_pelicula);
            form_data.append('fecha_inicio',fecha_inicio);
            form_data.append('fecha_fin',fecha_fin);
            form_data.append('hora_inicial',hora_inicial);
            form_data.append('hora_final',hora_final);

            $.ajax({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('admin.guardardetallepeliculas') }}",
                method: 'post',
                cache: false,
                contentType: false,
                processData: false,
                dataType: 'json',
                data: form_data,
        
            success:function(data){
                        if(data){
                            Swal.fire({
                                title: 'DATOS GUARDADOS',
                                timer: 2500,
                                type: 'success'
                                    })
                            limpiar_formulario();
                            
                                }
                    },
        
            error:function(data){

                    Swal.fire({
                        icon: 'error',
                        title: 'Tenga en cuenta..',
                        text: 'Si no puedes guardar es por que:',
                        footer: '<a href>No puedes Dejar Campos Vacios '
                             })
                        console.log(data);

                        }

                }) 
     });

     function limpiar_formulario(){
        $("#formulario")[0].reset();
     }

    </script>
    



</body>
</html>