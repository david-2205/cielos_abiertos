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
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre
                            style="font-size: 20px;position: absolute;top: -10px;">
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
                    <center>

                    
                        <form id="formulario" action="" method="POST" enctype="multipart/form-data">

                            {{ csrf_field() }}

                            <div class="form-group text-white">
                                <label for="formGroupExampleInput">Codigo Categoria</label>
                                <input type="text"  class="form-control" id="codigo_categoria" name="codigo_categoria"
                                    placeholder="Codigo" onkeypress="return solonumeros(event)">
                                    
                            </div>

                            <div class="form-group text-white">
                                <label for="formGroupExampleInput">Nombre Categoria</label>
                                <input type="text" class="form-control" id="nombre_categoria" name="nombre_categoria"
                                    placeholder="Nombre" onkeypress="return sololetras(event)" >
                            </div>

                            <div class="form-group text-white">
                                <label for="exampleFormControlTextarea1">Descripcion</label>
                                <textarea class="form-control" id="descripcion" name="descripcion" rows="5"
                                    onkeypress="return sololetras(event)" ></textarea>
                            </div>




                            <br>
                            <div class="row">

                                <div class="col-xl-2">
                                </div>

                                <div class="col-xl-4">
                                    <button type="button" class="btn btn-primary btn-lg btn-block" id="guardar_categoria">Guardar</button>
                                </div>
                                

                                <div class="col-xl-4">
                                <a href="{{ route('tablacategoria')}}" class="btn btn-info btn-lg  btn-block" role="button" >Ver Tabla</a>
                                </div>

                            </div>

                           

                              
                
                            
                        </form>
                    </center>
                </div>





              {{--   <div class="col-xl-8">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>Codigo</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Accion</th>
                            </tr>
                        </thead>

                    </table>


                </div> --}}

            </div>
        </div>





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

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/custom.min.js') }}"></script>
    <script src="{{ asset('js/validacionnumero_letras.js') }}"></script>
    <script src="{{ asset('js/sweetalert2.min.js') }}"></script>

    


    <script>
        $("#guardar_categoria").click(function () {    
            let codigo_categoria = $("#codigo_categoria").val();
            let nombre_categoria = $("#nombre_categoria").val();
            let descripcion = $("#descripcion").val();

            /* console.log(codigo_categoria, nombre_categoria, descripcion); */

            var form_data;
            var form_data=new FormData();
            form_data.append('codigo_categoria',codigo_categoria);
            form_data.append('nombre_categoria',nombre_categoria);
            form_data.append('descripcion',descripcion);

            
            $.ajax({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('admin.guardarcategoria') }}",
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
                        footer: '<a href>Codigo Repetido <br> Campos Vacios <br> Codigo De La Categoria Debe Ser Menor a 9 Digitos</a>'

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
