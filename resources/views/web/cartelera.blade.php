@extends('layouts.plantillaprin')

@section('content')

<body class="bord">

    <div class="container-fluid">

   
        @foreach ($pelicula as $p)

        @if ($p->id == 1) 
            <video muted preload autoplay width="640" height="490" loop style="position: relative; top:40px; ">
             <source src="{{$p->video_estreno}}" type="video/mp4">
            </video>
       @endif
        @endforeach

        <div id="vidtop-content ">
            <div class="vid-info">
                <h1 style="text-align: center; font-size:22px;font-weight: bold;">Proximo Estreno</h1>
                <h3>Mulan</h3>
                <h6>Estrena el 10 de abril.</h6>
                <h6>La aclamada cineasta Niki Caro le da vida al épico relato de la legendaria guerrera china MULÁN, en la que una joven valiente arriesga todo, por amor a su familia y a su país, para convertirse en una de las más grandes guerreras que China haya conocido
                </h6>
                <a href="https://www.youtube.com/embed/n2pryOH2UQY">Ver Trailer</a>

            </div>
        </div>
        <br>
        <!-- text-transform: uppercase; -->
        <p class="texto3d"><em>Trailers</em></p>

        <hr width="100%" class="lien">
        <br>

        <div class="row">
           
            @foreach ($pelicula as $p)

            @if($p->url_youtube)
            <div class="col-xl-4 bd-highlight mb-3">
             <div class="card">

                 <iframe height="250" class="w-100" src="{{$p->url_youtube}}" frameborder="0" allowfullscreen alt="Card image"></iframe>
 
                 <div style="border:2px solid#0000;">
                     <div class="card-body letracuerp pintado1" style="background-color: #040405;color: white;"><span></span>
 
                         <div class="row">
                             <div class="col-xl-5">
                                 <p class="letranegrita"> Calificacion:</p>
                             </div>
                             <div class="col-xl-6">
                                 <p>+16</p>
                             </div>
                         </div>
 
                         <div class="row">
                             <div class="col-12">
                                 <p class="letranegrita">Sinopsis:</p>
 
                               <p class="justi">{{$p->sinopsis}}</p>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
            @endif
            
            @endforeach



           

        </div>

        <br>


        <div class="row">

            <div class="col-xl-4 bd-highlight mb-3">
                <div class="card">
                    <iframe height="250" class="w-100" src="https://www.youtube.com/embed/IsCVyVAd6D4" frameborder="0" allowfullscreen alt="Card image"></iframe>

                    <div style="border:2px solid#0000;">
                        <div class="card-body letracuerp pintado1" style="
   background-color: #040405;color: white;
"><span></span>



                            <div class="row">
                                <div class="col-xl-5">
                                    <p class="letranegrita">Genero:</p>
                                </div>
                                <div class="col-xl-6">
                                    <p>Accion</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-5">
                                    <p class="letranegrita"> Calificacion:</p>
                                </div>
                                <div class="col-xl-6">
                                    <p>+16</p>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <p class="letranegrita">Sinopsis:</p>

                                    <p class="justi">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis repellat, beatae saepe. Non aperiam veniam tempore illo optio perferendis fugit assumenda nisi deleniti! Asperiores magni fuga incidunt delectus accusantium! Magnam!</p>
                                </div>
                            </div>




                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 bd-highlight mb-3">
                <div class="card">
                    <iframe height="250" class="w-100" src="
                    https://www.youtube.com/embed/y-EyJg0oD7c" frameborder="0" allowfullscreen alt="Card image"></iframe>

                    <div style="border:2px solid#0000;">
                        <div class="card-body letracuerp pintado1" style=" background-color: #040405;color: white;
"><span></span>

                            <div class="row">
                                <div class="col-xl-5">
                                    <p class="letranegrita">Genero:</p>
                                </div>
                                <div class="col-xl-6">
                                    <p>Accion</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-5">
                                    <p class="letranegrita"> Calificacion:</p>
                                </div>
                                <div class="col-xl-6">
                                    <p>+16</p>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-12">
                                    <p class="letranegrita">Sinopsis:</p>

                                    <p class="justi">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis repellat, beatae saepe. Non aperiam veniam tempore illo optio perferendis fugit assumenda nisi deleniti! Asperiores magni fuga incidunt delectus accusantium! Magnam!</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 bd-highlight mb-3">
                <div class="card">
                    <iframe height="250" class="w-100" src="https://www.youtube.com/embed/n2pryOH2UQY" frameborder="0" allowfullscreen alt="Card image"></iframe>

                    <div style="border:2px solid#0000;">
                        <div class="card-body letracuerp pintado1" style="
  background-color: #040405;color: white;
"><span></span>

                            <div class="row">
                                <div class="col-xl-5">
                                    <p class="letranegrita">Genero:</p>
                                </div>
                                <div class="col-xl-6">
                                    <p>Accion</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-5">
                                    <p class="letranegrita"> Calificacion:</p>
                                </div>
                                <div class="col-xl-6">
                                    <p>+16</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <p class="letranegrita">Sinopsis:</p>

                                    <p class="justi">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis repellat, beatae saepe. Non aperiam veniam tempore illo optio perferendis fugit assumenda nisi deleniti! Asperiores magni fuga incidunt delectus accusantium! Magnam!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>

        <br>
        <br>
        <br>

        <div id="carouselFadeExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="imagenes/peliculas/mis_huellas.jpeg" alt="900x400" data-holder-rendered="true" style="width: 900px; height: 500px;">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="imagenes/peliculas/denzelwashig.jpeg" alt="900x400" data-holder-rendered="true" style="width: 900px; height: 500px;">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="imagenes/peliculas/holmes.jpeg" alt="900x400" data-holder-rendered="true" style="width: 900px; height: 500px;">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="imagenes/peliculas/noche_chimel.jpg" alt="900x400" data-holder-rendered="true" style="width: 900px; height: 500px;">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselFadeExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselFadeExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        
        <!-- <div align="center">
            <font color="#FFFFFF">
                <marquee bgcolor="#000000" direction="left" loop="20" class="textomov">VEN Y DISFRUTA</marquee>
            </font>
        </div> -->


    </div>

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

    <script>
        $(document).ready(function(e) {
            $('.pintado1').on('mouseenter', function(e) {
                x = e.pageX - $(this).offset().left;
                y = e.pageY - $(this).offset.top;
                $(this).find('span').css({
                    top: y,
                    left: x
                })
            })

            $('.pintado1').on('mouseout', function(e) {
                x = e.pageX - $(this).offset().left;
                y = e.pageY - $(this).offset.top;
                $(this).find('span').css({
                    top: y,
                    left: x
                })
            })
        })
    </script>


</body>


@endsection