<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />

    <title>Cielo Abierto</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <link href="{{ asset('css/estiloprincipal.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('imagenes/logos/CINE1.png') }}">
    <title>Auto Cine</title>

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark colornav">
            <a class="navbar-brand" href="{{ route('somos') }}"><img src="imagenes/logos/CINE1.png" width="100px"></a>



            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav mr-auto" style="font-size:18px">

                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('bienvenido') }}" style="color:#009AF2"><strong>BIENVENIDO</strong><span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link letranegrita" href="{{ route('cartelera') }}" style="color:#009AF2">CARTELERA</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link letranegrita" href="{{ route('taquilla')}}" style="color:#009AF2">TAQUILLERIA</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link letranegrita" href="{{ route('confiteria')}}" style="color:#009AF2">CONFITERIA</a>
                    </li>
                </ul>

                <ul class="navbar-nav">

                    <li class=" nav-item">
                        @guest
                        <a class="nav-link" href="{{ route('login') }}">
                            <img src="{{ asset('imagenes/logos/persona.jpg') }}" class="imgpro">
                        </a>
                        @else

                
                            <!-- <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li> -->
                        @endguest
                    </li>

                </ul>
            </div>
        </nav>

    </header>


    <main class="py-4">
        @yield('content')
    </main>



    <!--Javascript-->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js') }}"></script>
    <script src="{{asset('js/custom.min.js') }}"></script>
</body>


</html>