<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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


    <link rel="stylesheet" href="@yield('stylo')">


    <title>Document</title>
</head>
<body>



<nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <a href="" class="navbar-brand"><img src="img/logo.png" alt=""></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end clearfix">
                <li class="nav-item  ">
                    <a class="nav-link" href="{{route('app')}}">
                        Inicio
                    </a>
                </li>
                <li class="nav-item {{setActive('centro')}}">
                    <a class="nav-link" href="{{route('centro')}}">
                        Centros de reparacion
                    </a>
                </li>
                <li class="nav-item {{setActive('misequipos')}}"  >
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


@yield('contener')


<div id="preloader">
    <div class="loader" id="loader-1"></div>
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
