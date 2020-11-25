@extends('layouts.plantillaprin')
@section('content')

<body class="bord">

    <div class="bd-example subir">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
            </ol>
            <div class="carousel-inner" role="listbox">


                <div class="carousel-item active">
                    <img class="d-block w-100" src="imagenes/peliculas/amor_inquebrantable.jpeg" style="width: 370px; height: 550px;" data-holder-rendered="true">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>DRAMA</h3>

                    </div>
                </div>

            
                @foreach ($pelicula as $p)
                <div class="carousel-item">
                <img class="d-block w-100" src="{{$p->imagen}}" style="width: 370px; height: 550px;" data-holder-rendered="true">
                    <div class="carousel-caption d-none d-md-block">
                    <h3>{{$p->nombre}}</h3>

                    </div>
                </div>
                @endforeach

               
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <section class="acomode">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-7"></div>
                <div class="col-xl-5 sube">
                    <h2 class="letra">APARTA TU ENTRADA</h2>
                    <div class="letra">
                        <p>Adquiere tu menu</p>
                        <p>Consigue el mejor puesto</p>
                        <p>Disfruta</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br>

    <div class="galeria baje">
        <h1 style="color: white;">Buenas Historias</h1>
        <div class="linea"></div>
        <div class="contenedor-imagenes">
            <div class="imagen">
                <img src="imagenes/target_imagenes/talento.jpg" alt="">
                <div class="overlay">
                    <h2>VIVE</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="imagenes/target_imagenes/padrino_bodas.jpg" alt="">
                <div class="overlay">
                    <h2>LA</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="imagenes/target_imagenes/spiderman.jpg" alt="">
                <div class="overlay">
                    <h2>PASIÓN</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="imagenes/target_imagenes/munto_perdido.jpg" alt="">
                <div class="overlay">
                    <h2>DEL</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="imagenes/target_imagenes/la_land.jpg" alt="">
                <div class="overlay">
                    <h2>AUTOCÍNE</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="imagenes/target_imagenes/moster.jpg" alt="">
                <div class="overlay">
                    <h2>CON</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="imagenes/target_imagenes/jacson.png" alt="">
                <div class="overlay">
                    <h2>ATENCIÓN</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="imagenes/target_imagenes/amigo_abomi.jpg" alt="">
                <div class="overlay">
                    <h2>EN</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="imagenes/target_imagenes/capitaname.jpg" alt="">
                <div class="overlay">
                    <h2>VIVO</h2>
                </div>
            </div>

        </div>
    </div>

    <br>

    <div class="container fluid bajelo">
        <div class="row">
            <div class="col-xl-3 bd-highlight mb-2">
                <div class="card">
                    <img class="card-img-top" src="imagenes/target_imagenes/cupon.jpg" alt="Card image cap">
                </div>
            </div>

            <div class="col-xl-3 bd-highlight mb-2">
                <div class="card">
                    <img class="card-img-top" src="imagenes/target_imagenes/cupon.jpg" alt="Card image cap">
                </div>
            </div>

            <div class="col-xl-3 bd-highlight mb-2">
                <div class="card">
                    <img class="card-img-top" src="imagenes/target_imagenes/cupon.jpg" alt="Card image cap">
                </div>
            </div>

            <div class="col-xl-3 bd-highlight mb-2">
                <div class="card">
                    <img class="card-img-top" src="imagenes/target_imagenes/cupon.jpg" alt="Card image cap">
                </div>
            </div>
        </div>
    </div>

    <br>

    <div class="centro bajelo1">

        <div class="box">
            <img class="mde" src="imagenes/target_imagenes/aurora4.jpg">
            <span>Ten la mejor experiencia</span>
        </div>

        <div class="box">
            <img class="mde" src="imagenes/target_imagenes/feli2.jpg">
            <span>Disfruta con quien desees</span>
        </div>


        <div class="box">
            <img class="mde" src="imagenes/target_imagenes/nin.jpg">
            <span>Tambien hay espacio para los niños</span>
        </div>

    </div>

    <div class="container">
        <div class="card acomode2">
            <div class="card-body">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="imagenes/comidas/hamburguesa.jpg" alt="900x400" data-holder-rendered="true" style="height: 330px;">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="imagenes/comidas/pizza2.jpg" alt="900x400" data-holder-rendered="true" style=" height: 330px;">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="imagenes/comidas/perrocal1.jpg" alt="900x400" data-holder-rendered="true" style=" height: 330px;">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>


            </div>
        </div>
    </div>

    <br>
    <div class="acomode2">
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


    <div class="footer-dark acomode2">
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