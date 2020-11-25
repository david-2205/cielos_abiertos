<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cielo Abierto</title>

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/stilo-admin.css') }}" rel="stylesheet">
    <link href="{{ asset('js/bootstrap-fileinput/css/fileinput.min.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('imagenes/logos/CINE1.png') }}">
    <title>Auto Cine</title>

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

                <div class="col-xl-6">
                    <br>
                    <br>
                    <br>
                    <img src="../imagenes/comidas/hamburguesa.jpg" class="img-fluid" alt="Responsive image">
                </div>

                <div class="col-xl-6">
                    <form action=" " method="POST" enctype="multipart/form-data">

                        {{ csrf_field() }}

                        <div class="form-group text-white">
                            <label for="codigo_producto">{{ __('Codigo') }}</label>
                            <input id="codigo_producto" type="text" class="form-control @error('codigo_producto') is-invalid @enderror" name="codigo_producto" value="{{ old('codigo_producto') }}" placeholder="Codigo producto" onkeypress="return solonumeros(event)">

                            @error('Codigo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>

                        <div class="form-group text-white">
                            <label for="nombre">{{ __('Nombre Del producto') }}</label>
                            <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" placeholder="Nombre" onkeypress="return sololetras(event)">

                            @error('Nombre Del producto')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group text-white">
                            <label for="cantidad">{{ __('Cantidad') }}</label>
                            <input id="cantidad" type="text" class="form-control @error('cantidad') is-invalid @enderror" name="cantidad" value="{{ old('cantidad') }}" placeholder="Cantidad" onkeypress="return solonumeros(event)">

                            @error('Cantidad')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group text-white">
                            <label for="precio">{{ __('Precio') }}</label>
                            <input id="precio" type="text" class="form-control @error('precio') is-invalid @enderror" name="precio" value="{{ old('precio') }}" placeholder="Precio"  onkeypress="return solonumeros(event)">

                            @error('Precio')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>


                        <div class="form-group text-white">
                            <label for="archivos">{{ __('Archivos') }}</label>
                            <input type="file" name="archivos" class="form-control-file" id="archivos">
                        </div>


                        <br>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                            {{ __('Guardar') }}</button>
                    </form>

                </div>




                <!-- <div class="form-group text-white">
                        <label for="foto">{{ __('Foto') }}</label>
                        <input type="file" id="foto" class="form-control @error('foto') is-invalid @enderror" name="foto" value="{{ old('foto') }}" data-initial-preview="{{isset($data->imagen)? Storge::url("imagenes/caratulas/$data->imagen"):"http//www.placehold.it/10*10/EFEFEF/AAAAAA&text/Caratula+Libro"}}" accept="image/*">

                        @error('Foto')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div> -->

                <!-- <div class="file-loading">
                        <input id="input-23" name="input23[]" type="file" multiple>
                    </div> -->

                <!-- <div class="carga de archivos">
                        <input id="input-21" type="file" accept="image / *">
                    </div> -->

            </div>
        </div>

        <br>
       {{--  <div class="row">
            <div class="col-12">
                @include('admin.tabla')
            </div>
        </div> --}}

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
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/custom.min.js') }}"></script>
    <script src="{{asset('js/validacionnumero_letras.js')}}"></script>
    

    <!-- <script src="{{asset('js/bootstrap-fileinput/js/fileinput.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-fileinput/js/locales/es.js')}}"></script>
    <script src="{{asset('js/bootstrap-fileinput/themes/fas/theme.min.js')}}"></script>
    <script src="{{asset('js/crear.js')}}"></script> -->
</body>

</html>