<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cielo Abierto</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/stilo-admin.css') }}" rel="stylesheet">

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



        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <img class="card-img-top" src="imagenes/comidas/comidas.jpg" height="335px" alt="Card image cap">
                    <div class="card-body" style="background-color: black;">
                        <p class="card-text" style="color: white;">Podras gestionar los productos</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-4">
                <div class="card">
                    <img class="card-img-top" src="imagenes/peliculas/peliculas.jpg" height="320px" alt="Card image">
                    <div class="card-body" style="background-color:black;">
                        <p class="card-text" style="color: white;">Tendras control de las peliculas a visualizar</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-4">
                <div class="card">
                    <img src="imagenes/finanza.jpg" height="300px" alt="Card image">
                    <div class="card-body" style="background-color:black;">
                        <p class="card-text" style="color: white;"> Tendra la plena confianza de los ingresos/egresos y como administrador tendra el control del funcionamiento</p>
                    </div>
                </div>
            </div>

        <a href="{{ route('register') }}">registre</a>
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

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js') }}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/custom.min.js') }}"></script>

</body>

</html>