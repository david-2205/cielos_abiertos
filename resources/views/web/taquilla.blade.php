@extends('layouts.plantillaprin')
@section('content')

<body class="bord">

    <div class="container-fluid">
        <img class="taqim" src="imagenes/cielo_abierto/img1.jpg" alt="Responsive image">

        <br>
        <br>

        <div class="bordeco">
            <center>
                <header style="color:white;font-family: sans-serif;">
                    <br>
                    <h2 class="letrape">FUNCIÓN</h2>
                </header>
            </center>

            <br>
           
                    <h3 style="color:white;font-family: sans-serif;">&nbsp;&nbsp;JUEVES</h3>
                    <br>

                    @foreach ( $detallepelicula as $p)

                    @if($p->id==1)
                   
                    <p style="color:white;font-family: sans-serif;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$p->nombre_pelicula}}</p>

                    @endif
                    @endforeach

                    <div class="row">
                        <div class="col-xl-1"></div>
                        <div class="col-xl-4">
                            <img class=" d-block w-100 img-fluid d-flex p-2 bd-highlight" src="imagenes/peliculas/erase_unavez.jpeg" alt="Responsive image" style="width:250px; height:370px">
                        </div>

                        <div class="col-xl-4">
                            <img class=" d-block w-100 img-fluid d-flex p-2 bd-highlight" src="imagenes/peliculas/Rey_Arturo_2.png" alt="Responsive image" style="width:250px; height:370px">
                        </div>
                    </div>
                
           
            <br>

            <div class="container">
                <h4 style="color:white;font-family: sans-serif;">Detalles del evento</h4>
                <div style="background-color:white;color:#C41E23;font-weight: bold;">
                    @foreach ( $detallepelicula as $p)

                    @if($p->id==1)


                    <p>&nbsp;&nbsp;&nbsp;&nbsp;{{$p->fecha_inicio}}</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;{{$p->fecha_fin}}</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;{{$p->hora_inicial}}</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;{{$p->hora_final}}</p>
                   
                    

                    @endif


                    @endforeach

                </div>

                <br>

                <div class="row">
                    <div class="col-xl-9"></div>
                    <div class="col-xl-3"><a href="{{ route('boletaprimero') }}" class="btn btn-primary" style="font-family: sans-serif; font-size:23px;">Adquirir Boleta</a></div>
                </div>
                <br>
                
               
            </div>

            <br>
            <br>
            <h3 style="color:white;font-family: sans-serif;">&nbsp;&nbsp;VIERNES</h3>
            <br>
            @foreach ( $detallepelicula as $p)

            @if($p->id==2)
           
            <p style="color:white;font-family: sans-serif;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$p->nombre_pelicula}}</p>

            @endif
            @endforeach
           
            <div class="row">
                <div class="col-xl-1"></div>
                <div class="col-xl-4">
                    <img class=" d-block w-100 img-fluid d-flex p-2 bd-highlight" src="imagenes/peliculas/erase_unavez.jpeg" alt="Responsive image" style="width:250px; height:370px">
                </div>

                <div class="col-xl-4">
                    <img class=" d-block w-100 img-fluid d-flex p-2 bd-highlight" src="imagenes/peliculas/Rey_Arturo_2.png" alt="Responsive image" style="width:250px; height:370px">
                </div>
            </div>

            <br>

            <div class="container">
                <h4 style="color:white;font-family: sans-serif;">Detalles del evento</h4>
                <div style="background-color:white;color:blue;font-weight: bold;">
                    @foreach ( $detallepelicula as $p)

                    @if($p->id==2)

                    <p>&nbsp;&nbsp;&nbsp;&nbsp;{{$p->fecha_inicio}}</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;{{$p->fecha_fin}}</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;{{$p->hora_inicial}}</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;{{$p->hora_final}}</p>
                   
                    @endif
                    @endforeach
                </div>
                <br>
                <div class="row">
                    <div class="col-xl-9"></div>
                    <div class="col-xl-3"><a href="{{ route('boletados') }}" class="btn btn-primary" style="font-family: sans-serif; font-size:23px;">Adquirir Boleta</a></div>
                </div>
                <br>
            </div>


            <br>
            <br>
            <h3 style="color:white;font-family: sans-serif;">&nbsp;&nbsp;SABADO</h3>
            <br>
            
            @foreach ( $detallepelicula as $p)

            @if($p->id==3)
           
            <p style="color:white;font-family: sans-serif;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$p->nombre_pelicula}}</p>

            @endif
            @endforeach

            <div class="row">
                <div class="col-xl-1"></div>
                <div class="col-xl-4">
                    <img class=" d-block w-100 img-fluid d-flex p-2 bd-highlight" src="imagenes/peliculas/erase_unavez.jpeg" alt="Responsive image" style="width:250px; height:370px">
                </div>

                <div class="col-xl-4">
                    <img class=" d-block w-100 img-fluid d-flex p-2 bd-highlight" src="imagenes/peliculas/Rey_Arturo_2.png" alt="Responsive image" style="width:250px; height:370px">
                </div>
            </div>

            <br>

            <div class="container">
                <h4 style="color:white;font-family: sans-serif;">Detalles del evento</h4>
                <div style="background-color:white;color:blue;font-weight: bold;">
                    @foreach ( $detallepelicula as $p)

                    @if($p->id==3)
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;{{$p->fecha_inicio}}</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;{{$p->fecha_fin}}</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;{{$p->hora_inicial}}</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;{{$p->hora_final}}</p>
                
                    @endif

                    @endforeach
                </div>

                <br>

                <div class="row">
                    <div class="col-xl-9"></div>

                    <div class="col-xl-3"><a href="{{ route('boletatres') }}" class="btn btn-primary" style="font-family: sans-serif; font-size:23px;">Adquirir Boleta</a></div>

                </div>
                <br>
            </div>

            <br>
            <br>
            <h3 style="color:white;font-family: sans-serif;">&nbsp;&nbsp;DOMINGO</h3>
            <br>
            <p style="color:white;font-family: sans-serif;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ERASE UNA VEZ + REY ARTURO</p>

            <div class="row">
                <div class="col-xl-1"></div>
                <div class="col-xl-4">
                    <img class=" d-block w-100 img-fluid d-flex p-2 bd-highlight" src="imagenes/peliculas/erase_unavez.jpeg" alt="Responsive image" style="width:250px; height:370px">
                </div>

                <div class="col-xl-4">
                    <img class=" d-block w-100 img-fluid d-flex p-2 bd-highlight" src="imagenes/peliculas/Rey_Arturo_2.png" alt="Responsive image" style="width:250px; height:370px">
                </div>
            </div>

            <br>

            <div class="container">
                <h4 style="color:white;font-family: sans-serif;">Detalles del evento</h4>
                <div style="background-color:white;color:blue;font-weight: bold;">

                    @foreach ( $detallepelicula as $p)

                    @if($p->id==4)
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;{{$p->fecha_inicio}}</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;{{$p->fecha_fin}}</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;{{$p->hora_inicial}}</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;{{$p->hora_final}}</p>
                
                    @endif

                    @endforeach
                </div>

                <br>

                <div class="row">
                    <div class="col-xl-9"></div>

                    <div class="col-xl-3"><a href="{{ route('boletacuatro') }}" class="btn btn-primary" style="font-family: sans-serif; font-size:23px;">Adquirir Boleta</a></div>

                </div>
                <br>
            </div>

            <br>
            <br>
            <h3 style="color:white;font-family: sans-serif;">&nbsp;&nbsp;LUNES</h3>
            <br>
            <p style="color:white;font-family: sans-serif;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ERASE UNA VEZ + REY ARTURO</p>

            <div class="row">
                <div class="col-xl-1"></div>
                <div class="col-xl-4">
                    <img class=" d-block w-100 img-fluid d-flex p-2 bd-highlight" src="imagenes/peliculas/erase_unavez.jpeg" alt="Responsive image" style="width:250px; height:370px">
                </div>

                <div class="col-xl-4">
                    <img class=" d-block w-100 img-fluid d-flex p-2 bd-highlight" src="imagenes/peliculas/Rey_Arturo_2.png" alt="Responsive image" style="width:250px; height:370px">
                </div>
            </div>

            <br>

            <div class="container">
                <h4 style="color:white;font-family: sans-serif;">Detalles del evento</h4>
                <div style="background-color:white;color:blue;font-weight: bold;">
                    @foreach ( $detallepelicula as $p)

                    @if($p->id==5)
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;{{$p->fecha_inicio}}</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;{{$p->fecha_fin}}</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;{{$p->hora_inicial}}</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;{{$p->hora_final}}</p>
                
                    @endif

                    @endforeach



                </div>

                <br>

                <div class="row">
                    <div class="col-xl-9"></div>

                    <div class="col-xl-3"><a href="{{ route('boletacinco') }}" class="btn btn-primary" style="font-family: sans-serif; font-size:23px;">Adquirir Boleta</a></div>

                </div>
                <br>
            </div>


        </div>

    </div>

    <br>
    <div class="baje">
        <!-- google mapas -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <iframe class="d-block w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.4412361124864!2d-72.47362618619738!3d7.848802608517223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e6645883b1f284d%3A0x3182f6885d7b2b70!2sCIELO%20ABIERTO%20-%20AUTOCINEMA!5e0!3m2!1sen!2sco!4v1597279314235!5m2!1sen!2sco" width="600" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>

            </div>

        </div>
    </div>


    <br>
    <div class="footer-dark baje">
        <footer>
            <div class="container-fluid">
                <div class="row">

                    <div class="col-xl-1">

                    </div>

                    <div class="col-12 col-md-4 col-xl-4  item text">
                        <p class="letrafooter">Encuentranos</p>
                        <ul>
                            <a href="https://www.facebook.com/watch/cinemovil.cieloabierto/"><img src="imagenes/logos/FACEBOOKCINEMOVIL_1.jpg" class="imgpro"></a>
                            <a href="#"> <img src="imagenes/logos/INSTAGRAMCINEMOVIL_3.jpg" class="imgpro"></a>
                            <a href="https://www.youtube.com/channel/UCn9yfgLzs6fewnkuhszqMsg"><img src="imagenes/logos/YOUTUBECINEMOVIL_2.jpg" class="imgpro"></a>

                        </ul>
                    </div>

                    <div class="col-12 col-md-8 col-xl-7 item ">
                        <p class="letrafooter">Estudios</p>
                       
                        <ul>
                            <span><img src="imagenes/logos/UNIVERSALCINEMOVIL_1.jpg" class="imgpronto "></span>
                            <span><img src="imagenes/logos/SONYCINEMOVIL_2.jpg" class="imgpronto "></span>
                            <span><img src="imagenes/logos/WARNERCINEMOVIL_3.jpg" class=" imgpronto "></span>
                            <span><img src="imagenes/logos/PARAMONTCINEMOVIL_4.jpg" class=" imgpronto "></span>


                        </ul>
                    </div>

                </div>
            </div>
        </footer>
    </div>
</body>
@endsection