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
   {{--  <link href="{{ asset('css/tabla.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/sweetalert2.min.css') }}" type="text/css" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('imagenes/logos/CINE1.png') }}">
    
    {{-- FALTA EL CAMPO QUE NO SE REPITA --}}

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

            <br>

            <form  action="{{ route('admin.guardarpeliculas') }}" method="POST" enctype="multipart/form-data" >
               
                {{ csrf_field() }}

                <div class="row">

                  

                    <div class="col-xl-6">

                        <div class="form-group text-white">
                            <label for="formGroupExampleInput">Codigo</label>
                            <input type="text" class="form-control" id="codigo_pelicula"
                             name="codigo_pelicula" placeholder="Codigo" 
                             onkeypress="return solonumeros(event)" required>
                        </div>

                        <div class="form-group text-white">
                            <label for="formGroupExampleInput">Nombre </label>
                            <input type="text" class="form-control" id="nombre" 
                            name="nombre" placeholder="Nombre" onkeypress="return sololetras(event)" required>
                        </div>
                        <div class="form-group text-white">
                            <label for="formGroupExampleInput2">Clasificacion</label>
                            <input type="text" class="form-control" id="clasificacion"
                             name="clasificacion" placeholder="Clasificacion" required>
                        </div>

                        <div class="form-group text-white">
                            <label for="formGroupExampleInput2">Duraccion</label>
                            <input type="text" class="form-control " id="duraccion"
                             name="duraccion" placeholder="Duraccion" required>
                        </div>

                        <div class="form-group text-white">
                            <label for="exampleFormControlTextarea1">Sinopsis</label>
                            <textarea class="form-control" id="sinopsis" name="sinopsis" minlength="150" maxlength="153"
                             rows="4" required></textarea>
                        </div>

                    </div>


                    <div class="col-xl-6">


                        <div class="form-group text-white">
                            <label for="imagen">Archivo Imagen</label>
                            <input type="file" name="imagen" class="form-control-file" id="imagen">
                        </div>

                        <div class="form-group text-white">
                            <label for="video_estreno">Archivo Video</label>
                            <input type="file" name="video_estreno" class="form-control-file"
                             id="video_estreno">
                        </div>

                        <div class="form-group text-white">
                            <label for="exampleFormControlTextarea1">Url Youtube</label>
                            <input type="text" class="form-control " 
                            id="url_youtube" name="url_youtube" placeholder="url_youtube">
                        </div>


                        <div class="form-group text-white">
                            <label for="disabledSelect">Categoria</label>
                            <select id="id_categoria_peli" name="id_categoria_peli" 
                            class="form-control" required>
                                @foreach ($crearcategoriasnuevo as $fm)
                                <option value="{{$fm['id']}}">{{$fm['nombre_categoria']}}</option>
                                @endforeach
                            </select>

                        </div>

                        <div class="form-group text-white d-none">
                            <label for="exampleFormControlTextarea1">Id Usuario</label>
                            <input type="text" class="form-control" id="id_user" name="id_user" 
                            placeholder="Nombre" value="{{ Auth::user()->id }}">
                        </div>

                       

                         @if(session('flash'))
                           <div class="alert alert-success" role="alert">
                            <h4 class="alert-heading">Bien Hecho!</h4>
                            {{session('flash')}}
                            <button type="button" class="close" data-dismiss="alert"  heigth="100px" alert-label="close">
                             <span aria-hidden="true">&times;</span>
                            
                           </div>
                        @endif


                    </div>
                </div>

                <br>

                <div class="row">

                    <div class="col-xl-2">
                    </div>

                    <div class="col-xl-4">
                        <button type="submit" class="btn btn-primary btn-lg btn-block" >Guardar</button>
                    </div>
                    

                    <div class="col-xl-4">
                        <a href="{{ route('tablapeliculas')}}" class="btn btn-info btn-lg  btn-block" role="button" >Ver Tabla</a>
                    </div>

                </div>
            </form>
        </div>

        <div class="col-12">

            <br>
           
            <!-- <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody class="text-white">
                </tbody>
            </table>
        </div> -->



        </div>


        <!--Javascript-->


        <script>
            function openNav() {
                document.getElementById("sideNavigation").style.width = "250px";
                document.getElementById("main").style.marginLeft = "250px";
            }

            function closeNav() {
                document.getElementById("sideNavigation").style.width = "0";
                document.getElementById("main").style.marginLeft = "0";
            }
        </script>

        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/popper.min.js') }}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/custom.min.js') }}"></script>
        <script src="{{asset('js/validacionnumero_letras.js')}}"></script>
        <script src="{{ asset('js/sweetalert2.min.js') }}"></script>
        

      
    {{-- <script>
        $("#guardarpeliculas").click(function () {    
            let codigo_pelicula = $("#codigo_pelicula").val();
            let nombre = $("#nombre").val();
            let clasificacion = $("#clasificacion").val();
            let duraccion = $("#duraccion").val();
            let sinopsis = $("#sinopsis").val();
            let imagen = $("#imagen").val();
            let video_estreno = $("#video_estreno").val();
            let url_youtube = $("#url_youtube").val();
            let id_categoria_peli = $("#id_categoria_peli").val();
            let id_user = $("#id_user").val();
            
            /* console.log(codigo_categoria, nombre_categoria, descripcion); */

            var form_data;
            var form_data=new FormData();
            form_data.append('codigo_pelicula',codigo_pelicula);
            form_data.append('nombre',nombre);
            form_data.append('clasificacion',clasificacion);
            form_data.append('duraccion',duraccion);
            form_data.append('sinopsis',sinopsis);
            form_data.append('imagen',imagen);
            form_data.append('video_estreno',video_estreno);
            form_data.append('url_youtube',url_youtube);
            form_data.append('id_categoria_peli',id_categoria_peli);
            form_data.append('id_user',id_user);

            
            $.ajax({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('admin.guardarpeliculas') }}",
                method: 'post',
                cache: false,
                contentType: false,
                processData: false,
                dataType: 'json',
                data: form_data,
        
                success:function(data){
                if(data){
                
                    Swal.fire({
                        title: 'DATOS GUARDADOS CORRECTAMENTE',
                        timer: 2500,
                        type: 'success'
                    })

                    // para que se ejecute cuando el guardado es exitoso
                    // ojo si copias el codigo de borrar luego de guardar debes cambiar el id ya debe unico en cada vista 

                    limpiar_formulario();
                    
                }
                },
        
                error:function(data){

                    Swal.fire({
                        icon: 'error',
                        title: 'Tenga en cuenta..',
                        text: 'Si no puedes guardar es por que:',
                        footer: '<a href>Codigo Repetido <br> No pueden Haber Campos Vacios <br> Codigo Pelicula No Puede ser Menor a 9 Digitos</a>'
                        
                       
                        
                        })

                       // limpiar_formulario();
               console.log(data);

                }
                }) 

     });

    // funciona para limpiar el formulario luego de guardar es una validacion pa q no guarden dos veces 
     function limpiar_formulario(){
        $("#formulario")[0].reset();
     }
    </script> --}}




</body>

</html>