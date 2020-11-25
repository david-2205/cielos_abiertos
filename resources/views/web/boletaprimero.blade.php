<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cielo Abierto</title>

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/stilo-admin.css') }}" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('imagenes/logos/CINE1.png') }}">
    <title>Auto Cine</title>
</head>
<style>
    .algo {
        color: white;
    }

</style>

<body style="background-color: black;">
    <div class="container-fluid">
        <br>
        <img src="/imagenes/cielo_abierto/fondo.jpg" style="position: relative;width:100%;height:43vh;">

        <br>
        <br>

        <h2 style="color: white;">
            <center>COMPRA</center>
        </h2>


        <br>

        <a style="font-size:20px;color:white;font-family:sans-serif;font-weight: bold;">Entradas</a>

        <div style="background-color:#2C2D35;color:white;">
            <div class="form-check ">
                <div class="row">
                    <div class="col-xl-1"></div>
                    <div class="col-xl-4">
                        <input class="form-check-input" type="radio" name="type" value="18000" onclick="func()">
                        <label class="form-check-label " for="exampleRadios1">
                            1 Entrada En Vehiculo
                        </label>
                    </div>

                    <div class="col-xl-4"></div>

                    <div class="col-xl-3" style="color: white;font-weight: bold;">
                        $18000
                    </div>

                </div>

            </div>



            <br>
            <div class="form-check ">
                <div class="row">
                    <div class="col-xl-1"></div>
                    <div class="col-xl-4">
                        <input class="form-check-input" type="radio" name="type" value="40000" onclick="func()">
                        <label class="form-check-label " for="exampleRadios1">
                            Menu Rayo
                            <p>1 Entrada en automovil + 2 Perros Calientes + 2 Gaseosa</p>
                        </label>
                    </div>

                    <div class="col-xl-4"></div>

                    <div class="col-xl-3" style="color: white;font-weight: bold;">
                        $40000
                    </div>

                </div>

            </div>

            <br>
            <div class="form-check ">
                <div class="row">
                    <div class="col-xl-1"></div>
                    <div class="col-xl-4">
                        <input class="form-check-input" type="radio" name="type" value="50000" onclick="func()">
                        <label class="form-check-label " for="exampleRadios1">
                            Menu Chispa
                            <p>1 Entrada en automovil + 4 Hamburguesas + 4 Gaseosa</p>
                        </label>
                    </div>

                    <div class="col-xl-4"></div>

                    <div class="col-xl-3" style="color: white;font-weight: bold;">
                        $50000
                    </div>

                </div>

            </div>

            <br>
            <div class="form-check ">
                <div class="row">
                    <div class="col-xl-1"></div>
                    <div class="col-xl-4">
                        <input class="form-check-input" type="radio" name="type" value="58000" onclick="func()">
                        <label class="form-check-label " for="exampleRadios1">
                            Menu Manteon
                            <p>1 Entrada en automovil + 4 Hamburguesas + 2 Perros + 4 Gaseosa</p>
                        </label>
                    </div>

                    <div class="col-xl-4"></div>

                    <div class="col-xl-3" style="color: white;font-weight: bold;">
                        $58000
                    </div>


                </div>

            </div>

            <br>
            <div class="form-check ">
                <div class="row">
                    <div class="col-xl-1"></div>
                    <div class="col-xl-4">
                        <input class="form-check-input" type="radio" name="type" value="65000" onclick="func()">
                        <label class="form-check-label " for="exampleRadios1">
                            Menu Cresposo
                            <p>1 Entrada en automovil + 2 Hellados + 2 Perros + 2 Gaseosa</p>
                        </label>
                    </div>

                    <div class="col-xl-4"></div>

                    <div class="col-xl-3" style="color: white;font-weight: bold;">
                        $65000
                    </div>


                </div>

            </div>


        </div>


        <br>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label type="button" data-toggle="modal" data-target="#exampleModalScrollable"
                style="color:#D63831;font-weight: bold;font-size: 18px;">
                Aceptar Terminos
            </label>

            <!-- Modal -->
            <div class="modal" id="exampleModalScrollable" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalScrollableLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenteredLabel">Terminos del Servicio</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Bienvenido a Autocine CieloAbierto! Le invitamos a acceder a nuestros sitios web y a
                                utilizar el Servicio de Evernote, pero tenga en cuenta que su invitación está sujeta a
                                su aceptación de estos Términos de Servicio. Este documento describe en detalle sus
                                derechos y nuestros derechos en relación con las disposiciones del Servicio (tal y como
                                se definen a continuación), así que por favor lea estos Términos con detenimiento</p>
                            <a>1.servicio</a>
                            <p>2.Buena instancia</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>

        </div>

        <br>








        <div class="row">
            <div class="col-xl-6">
                <p class="card-text">
                <div class="form-group ">
                    <label for="nombre_pelicula"
                        style="font-size:18px;color:white;font-family:sans-serif;">{{ __('Pelicula') }}</label>
                    <select id="id_pelicula" name="id_pelicula" value="{{ old('nombre_pelicula') }}"
                        class="form-control">
                        @foreach ($detallepelicula as $fm)
                            @if ($fm->id == 1)
                                <option>{{ $fm->nombre_pelicula }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                </p>


                <div class="form-group algo">
                    <label for="nombre">{{ __('NOMBRE') }}</label>
                    <input type="text" id="nombre" name="nombre" class="form-control" value="{{ old('nombre') }}"
                        placeholder="Digite Su Nombre" onkeypress="return sololetras(event)" required>

                    @error('nombre')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group algo">
                    <label for="apellido">{{ __('APELLIDO') }}</label>
                    <input type="text" name="apellido" id="apellido" class="form-control lastname"
                        value="{{ old('apellido') }}" placeholder="Digite Su Apellido"
                        onkeypress="return sololetras(event)" required>

                    @error('apellido')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group algo">
                    <label for="correo">{{ __('CORREO ELECTRONICO') }}</label>
                    <input type="text" name="correo" id="correo" class="form-control" value="{{ old('correo') }}"
                        required>

                    @error('correo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group algo">
                    <label for="telefono">{{ __('TELEFONO') }}</label>
                    <input type="text" name="telefono" id="telefono" class="form-control" value="{{ old('telefono') }}"
                        onkeypress="return solonumeros(event)" required>

                    @error('telefono')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group algo">
                    <label for="valor_pagar">{{ __('TOTAL A PAGAR') }}</label>
                    <input type="text" name="valor_pagar" id="valor_pagar" class="form-control"
                        value="{{ old('valor_pagar') }}" readonly="readonly">

                    @error('valor_pagar')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <br>
                <button type="submit" class="btn btn-primary btn-lg btn-block"
                    id="btnSaveFriend">{{ __('Pagar') }}</button>









            </div>




            <div class="col-xl-6">
                <br>
                <a style="font-size:22px;color:white;font-family:sans-serif;">
                    <center>UBICACIÓN</center>
                </a>

                <div class="card">
                    <div class="card-body">

                        <img class=" d-block w-100 img-fluid d-flex p-2 bd-highlight"
                            src="imagenes/peliculas/Rey_Arturo_2.png" alt="Responsive image"
                            style="width:90px; height:300px">


                    </div>
                </div>
            </div>

        </div>



        <br>

        <div class="row">
            <div class="col-xl-1"></div>

            <div class="col-xl-4">
               

                

               
            </div>

            <div class="col-xl-4">

              

                



                


            </div>


           

                <br>
              {{--   <center><img class="d-block  img-fluid d-flex p-2 bd-highlight "
                        src="/imagenes/cielo_abierto/pago/pse.jpg"
                        style="width: 180px;height:170px;border:2px solid#7D7375; visibility: hidden;"
                        onclick="Campo()"></center>

                <div class="alert alert-primary" style="visibility: hidden;" role="alert">

                    <strong>Presione la imagen!</strong>Forma de pago PSE.
                </div> --}}


                <!-- <img src="imagenes/cielo_abierto/pago/pse.jpg" width="140" class="img-fluid" alt="Responsive image"> -->

            
        </div>
      

    </div>


    <!--Javascript-->

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/validacionnumero_letras.js') }}"></script>
    <script src="{{ asset('js/Busilogi.js') }}"></script>
    <script src="{{ asset('js/Logic.js') }}"></script>

    <script type="text/javascript">
        function ShowSelected() {
            /* Para obtener el valor */
            // var cod = document.getElementById("producto").value;
            // console.log(cod);

            /* Para obtener el texto */
            var combo = document.getElementById("nombre_pelicula");
            var selected = combo.options[combo.selectedIndex].text;
            console.log(selected);
        }

    </script>
</body>

</html>
