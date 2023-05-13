

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/chatstyle.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" >
    <!-- Icon -->
    <link rel="stylesheet" href="assets/fonts/line-icons.css">
    <!-- Owl carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.css">

    <!-- Animate -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Main Style -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="shortcut icon" href="assets/img/logotranbspatrent.png" />
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>Keyboards</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>

@if(session('limite'))

    <script >

        Swal.fire({
            title: 'Solo puede enviar una solicitud por dia',
            text: " Vuelva a intentar dentro de 24h",
            icon: 'warning',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Ok',
            customClass: {
                icon: 'mi-icono-clase'
            }
        }).then((result) => {

        })
    </script>
@endif

@if(session('enviado'))

    <script >
        Swal.fire({
                title: 'Enviado!',
                text: 'Te estaremos contactando a tu numero:',
                icon: 'success',

        }

        )
    </script>
@endif
<!-- Navbar Start -->
<nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <a href="" class="navbar-brand"><img src="img/logo.png" alt=""></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end clearfix">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('app')}}">
                        Inicio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('centro')}}">
                        Centros de reparacion
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('misequipos')}}">
                        Estado de mis equipos
                    </a>
                </li>



                <li class="nav-item" id="nav-item">

                    @if(auth()->id()==null)

                        <a class="nav-link" href="{{route('login')}}">
                            <ion-icon  style="font-size: 1rem;"  name="person-outline"></ion-icon>
                        </a>

                    @endif
                    @if(auth()->id()!=null)
                        <a class="nav-link"  onclick="application()">
                            <ion-icon  style="font-size: 1rem;"  name="person-outline"></ion-icon>

                        </a>



                    @endif





                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

            </ul>
        </div>
    </div>
</nav>

<div  style="position: absolute;float: left; width: 100%;display: flex;justify-content: end;z-index: 1000; pointer-events: none" class="contains-historial">
    <div  id="cerrar"  style=" display: flex; " class="servicehistorial">



<div onclick="cerrarhistorial()" style="pointer-events: fill;width: 20px;height: 100%;display: flex;align-items: center;font-size: 1.4em;color: rgba(66,65,65,0.81)" >
    <ion-icon  id="rotate" style="rotate: 180deg" name="caret-back-outline"></ion-icon>

</div>

        <div style="overflow: hidden" class="listahistorial">
            <p>Historial</p>
            <ul>






            </ul>
        </div>

    </div>

</div>


<div class="aplication" >

<div style="" class="formulario"  style="max-width: 1800px">

        <div class="col-lg-7 col-md-12 col-sm-12">

            <div class="contact-block">
                <form id="contactForm" method="POST" action="./../savesolicitudes">
                    @csrf
                <strong style="color:rgba(10,10,10,0.72); font-size: 2rem;margin: 10px"> Solicitar servicio</strong>


                    <div style="margin-top:10px " id="row" class="row">

                        <div class="col-md-6 new">
                            <div class="form-group">
                                <select name="new"  class="form-control" data-error="seleccione un servicio" required id="new">
                                    <option value="">Seleccione si el equipo es nuevo o registrado</option>
                                    <option value="true">Nuevo equipo</option>
                                    <option value="false">Equipo registrado</option>

                                </select>

                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="btn btn-common" onclick="mostraropc()"><p>Continuar</p></div>

                        </div>
                        <div class="col-md-12" id="opcion-nuevo3" style="display: none">
                            <div class="form-group">
                                <input type="text" placeholder="Ingresa un nombre que identifique tu dispositivo"  id="" class="form-control" name="nombre" required data-error="Please enter your email">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>


                            <div class="col-md-6" id="opcion-nuevo" style="display: none">
                                <div class="form-group">
                                    <input type="text" placeholder="Marca del dispositivo"  id="email" class="form-control" name="marca_dispositivo" required data-error="Please enter your email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-md-6" id="opcion-nuevo1" style="display: none">
                                <div class="form-group">
                                    <input type="text" placeholder="Modelo del dispositivo"  id="email" class="form-control" name="modelo_equipo" required data-error="Please enter your email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>





                            <div class="col-md-6 " id="opcion-nuevo2" style="display: none" >
                                <div class="form-group">
                                    <select name="tipo_dispositivo"  class="form-control" data-error="seleccione un servicio" required id="email">
                                        <option value="">tipo de dispocitivo</option>
                                        <option value="pc">Pc</option>
                                        <option value="laptop">Laptop</option>
                                        <option value="tablet">Tablet</option>
                                        <option value="Celular">Celular</option>

                                    </select>

                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>









                            <div class="col-md-6 opcion_existente" id="opcion_existente" style="display: none">
                                <div class="form-group">
                                    <select name="equipo_id" id="equipo_id" class="form-control" required data-error="">
                                        <option value="">seleccione su equipo</option>
                                        @foreach($equipo_id as $equipos_id)
                                            <option value="{{$equipos_id->id}}">{{$equipos_id->nombre}}</option>


                                        @endforeach

                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>






                        <div class="col-md-6 " id="ambos" style="display: none">
                            <div class="form-group">
                                <select name="tipo_servicio" id="" class="form-control" required data-error="porfavor ingrese el tipo de identificacion">
                                    <option value="">Elija el tipo de mantenimiento</option>
                                    <option value="reparacion">Reparacion de dispositivo </option>
                                    <option value="mantenimiento">Mantenimiento para prevenir fallas </option>

                                </select>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-md-12" id="ambos1" style="display: none"  >
                            <div class="form-group">
                                <textarea class="form-control" id="message" placeholder="Cuentenos cual es el problema que presenta su dispositivo" name="problem" rows="7" data-error="Write your message" required></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            <strong>{{session('limite')}}
                            </strong>
                            <div class="submit-button text-left">
                                <button class="btn btn-common" id="form-submit"  type="submit">Solicitar servicio</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>



                    </div>
                </form>
            </div>
        </div>

</div>



    <div id="preloader">
        <div class="loader" id="loader-1"></div>
    </div>



</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<script src="assets/js/jquery-min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/jquery.nav.js"></script>
<script src="assets/js/scrolling-nav.js"></script>
<script src="assets/js/js.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/form-validator.min.js"></script>
<script src="assets/js/contact-form-script.min.js"></script>
<script src="/js/application.js"></script>

</body>
</html>
