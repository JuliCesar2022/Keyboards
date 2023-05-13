<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="assets/img/logotranbspatrent.png" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>KEYBOARDS</title>
    <!-- chat -->
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
    <link rel="stylesheet" href="assets/css/main.css" integrity>
    <!-- Responsive Style -->
    <link rel="stylesheet" href="assets/css/responsive.css">


</head>
<body>


<!-- Header Area wrapper Starts -->
<header id="header-wrap">
    <div class="contains" style="">
        <div onclick="abrirchat()" style="font-size: 50px;background: rgba(255, 202, 202, 1);color: red" id="chat" class="chat">
            <ion-icon  name="chatbubble-ellipses-outline"></ion-icon>


        </div>

    </div>

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a href="" class="navbar-brand"><img src="assets/img/logotranbspatrent.png" alt=""></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="lni-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto w-100 justify-content-end clearfix">
                    <li class="nav-item active">
                        <a class="nav-link" href="#hero-area">
                            Inicio
                        </a>

                    <li class="nav-item">
                        <a class="nav-link" href="#services">
                            Servicios
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team">
                            Equipo
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#testimonial">
                            Reseñas
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">
                            Nosotros
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
    <!-- Navbar End -->

    <!-- Hero Area Start -->
    <div id="hero-area" class="hero-area-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                    <div class="contents">
                        <h2 class="head-title">Bienvenido a KeyBoard</h2>
                        <p>Keyboard, una empresa de soporte a los computadores. Que ofrece multiples servicios entre los mas destacados mantenimiento, soporte, venta de piezas y instalaciones de software.  </p>
                        <div class="bootons">
                            <a href="/app"><div class="btnOne btn">Solicitar Servicios</div></a>


                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">

                    <div class="intro-img">
                        <img class="img-fluid"   src="assets/img/bienvenida.png" alt="">
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Hero Area End -->

</header>
<!-- Header Area wrapper End -->

<!-- Services Section Start -->
<section id="services" class="section-padding">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Nuestros Servicios</h2>
            <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="row">
            <!-- Services item -->
            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="services-item wow fadeInRight" data-wow-delay="0.3s">
                    <div class="icon">
                        <i class=><ion-icon name="laptop-outline"></ion-icon></i>
                    </div>
                    <div class="services-content">
                        <h3><a href="#">Mantenimiento</a></h3>
                        <p>Nuestra empresa ofrece a los clientes mantenimiento a computadoras para que permanezcan en un buen estado. </p>
                    </div>
                </div>
            </div>
            <!-- Services item -->
            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="services-item wow fadeInRight" data-wow-delay="0.6s">
                    <div class="icon">
                        <i class=><ion-icon name="construct-outline"></ion-icon></i>
                    </div>
                    <div class="services-content">
                        <h3><a href="#">Reparacion de equipos</a></h3>
                        <p>Ofrecemos reparaciones a equipos en malas condiciones, restaurandolos para su buen funcionamiento. </p>
                    </div>
                </div>
            </div>
            <!-- Services item -->
            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="services-item wow fadeInRight" data-wow-delay="0.9s">
                    <div class="icon">
                        <i class="lni-users"></i>
                    </div>
                    <div class="services-content">
                        <h3><a href="#">soporte</a></h3>
                        <p>Contamos con un sevicio de atencion al cliente en linea o directamente en nuestras instalaciones </p>
                    </div>
                </div>
            </div>
            <!-- Services item -->
            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="services-item wow fadeInRight" data-wow-delay="1.2s">
                    <div class="icon">
                        <i class=><ion-icon name="extension-puzzle-outline"></ion-icon></ion-icon></i>
                    </div>
                    <div class="services-content">
                        <h3><a href="#">Venta de componentes</a></h3>
                        <p>Contamos con una alta variedad de componentes nuevos y en buen estado, brindarle al usuario una mejor experiencia. </p>
                    </div>
                </div>
            </div>
            <!-- Services item -->
            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="services-item wow fadeInRight" data-wow-delay="1.5s">
                    <div class="icon">
                        <i class=""><ion-icon name="logo-windows"></ion-icon></i>
                    </div>
                    <div class="services-content">
                        <h3><a href="#">Instalaciones de software</a></h3>
                        <p>realizamos instalaciones de cualquier tipo de software que necesite.</p>
                    </div>
                </div>
            </div>
            <!-- Services item -->
            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="services-item wow fadeInRight" data-wow-delay="1.8s">
                    <div class="icon">

                        <i class=><ion-icon name="code-slash-outline"></ion-icon></i>
                    </div>
                    <div class="services-content">
                        <h3><a href="#">Desarrollo de software</a></h3>
                        <p>Ofrecemos un servicio de desarrollo de software personalizado para empresas de todos los tamaños y sectores industriales. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->

<!-- About Section start -->
<div class="about-area section-padding bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-xs-12 info">
                <div class="about-wrapper wow fadeInLeft" data-wow-delay="0.3s">
                    <div>
                        <div class="site-heading">
                            <p class="mb-3">Keyboards</p>
                            <h2 class="section-title">Mision</h2>
                        </div>
                        <div class="content">
                            <p>
                                Nuestra misión es llegar a ser la empresa más grande que pueda existir en
                                estos tiempos, que cuente con un gran equipo lleno de personas que al
                                igual que nosotros quieran un cambio enorme hacia la sociedad, ir paso a
                                paso construyendo una imagen impecable para nuestra empresa para que
                                los clientes vayan satisfechos con nuestro trabajo, queremos ser el paso a
                                seguir de otras personas que al igual que nosotros tenga una visión hacía el
                                futuro que represente el cambio.
                            </p>

                        </div>
                        <div class="site-heading">

                            <h2 class="section-title">Vision</h2>
                        </div>
                        <div class="content">
                            <p>
                                Como empresa, nuestra visión es ser líderes en la industria a través de
                                la innovación constante y la entrega de productos y servicios de la más
                                alta calidad. Nuestro objetivo es ofrecer soluciones que satisfagan las
                                necesidades y deseos de nuestros clientes de manera efectiva y
                                eficiente, y superar sus expectativas en términos de calidad, precio y
                                servicio al cliente.</br>
                                Para lograr esta visión, estamos comprometidos con la excelencia en
                                todo lo que hacemos, desde la investigación y el desarrollo hasta la
                                entrega. Buscamos constantemente nuevas formas de mejorar nuestros
                                productos y servicios para mantenernos a la vanguardia de la industria y
                                ofrecer el mayor valor posible a nuestros clientes. Nuestro objetivo final
                                es construir relaciones duraderas y beneficiosas con nuestros clientes y
                                ser reconocidos como el mejor en lo que hacemos.

                            </p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-xs-12 wow fadeInRight" data-wow-delay="0.3s">
                <img class="img-fluid" src="assets/img/about/img-1.png" alt="" >
            </div>
        </div>
    </div>
</div>
<!-- About Section End -->

<!-- Features Section Start -->
<section id="features" class="section-padding">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Caracteristicas fundamentales</h2>
            <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="content-left">
                    <div class="box-item wow fadeInLeft" data-wow-delay="0.3s">
                <span class="icon">
                  <i class="lni-rocket"></i>
                </span>
                        <div class="text">
                            <h4>Flexibilidad:</h4>
                            <p>es importante que la empresa sea capaz de adaptarse a las necesidades de cada cliente.</p>
                        </div>
                    </div>
                    <div class="box-item wow fadeInLeft" data-wow-delay="0.6s">
                <span class="icon">
                  <i class="lni-laptop-phone"></i>
                </span>
                        <div class="text">
                            <h4>Conocimiento técnico</h4>
                            <p> contamos con personal altamente capacitado y con conocimientos técnicos especializados </p>
                        </div>
                    </div>
                    <div class="box-item wow fadeInLeft" data-wow-delay="0.9s">
                <span class="icon">
                  <i class="lni-cog"></i>
                </span>
                        <div class="text">
                            <h4>Herramientas y equipos adecuados:</h4>
                            <p>Para nosotros es fundamental contar con las herramientas</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="show-box wow fadeInUp" data-wow-delay="0.3s">
                    <img src="assets/img/feature/intro-torre.png" alt="">
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="content-right">
                    <div class="box-item wow fadeInRight" data-wow-delay="0.3s">
                <span class="icon">
                  <i class="lni-leaf"></i>
                </span>
                        <div class="text">
                            <h4>Experiencia:</h4>
                            <p>Es importante contar con la experiencia en el sector  del mantenimiento de equipos.</p>
                        </div>
                    </div>
                    <div class="box-item wow fadeInRight" data-wow-delay="0.6s">
                <span class="icon">
                  <i class="lni-layers"></i>
                </span>
                        <div class="text">
                            <h4>Planificación y organización</h4>
                            <p>tenemos planes y programas de mantenimiento preventivo y correctivo bien estructurados.</p>
                        </div>
                    </div>
                    <div class="box-item wow fadeInRight" data-wow-delay="0.9s">
                <span class="icon">
                  <i class="lni-leaf"></i>
                </span>
                        <div class="text">
                            <h4>Seguridad y calidad: </h4>
                            <p>contamos con todas las normas de seguridad y calidad requeridas por la industria.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Features Section End -->

<!-- Team Section Start -->
<section id="team" style="justify-content: center" class="section-padding bg-gray">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Nuestro equipo</h2>
            <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-xs-12">
                <!-- Team Item Starts -->
                <div class="team-item wow fadeInRight" data-wow-delay="0.6s">
                    <div class="team-img">
                        <img class="img-fluid"  style="width: 100%;height: 200px;object-fit: cover" src="assets/img/team/Mesa%20de%20trabajo%20–%201.png" alt="">
                    </div>
                    <div class="contetn">
                        <div class="info-text">
                            <h3><a href="#">Luisa chacon</a></h3>
                            <p>Experta en instalaciones de software</p>
                        </div>
                        <p>Luisa Chacón es una experta en instalaciones de software con una amplia experiencia en el desarrollo. </p>
                        <ul class="social-icons">
                            <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Team Item Ends -->
            </div>
            <div class="col-lg-6 col-md-12 col-xs-12">
                <!-- Team Item Starts -->
                <div class="team-item wow fadeInRight" data-wow-delay="0.4s">
                    <div class="team-img">
                        <img class="img-fluid" src="assets/img/team/Mesa%20de%20trabajo%20–%202.png" alt="">
                    </div>
                    <div class="contetn">
                        <div class="info-text">
                            <h3><a href="#">Andres Rodriguez</a></h3>
                            <p>Jefe de KEYBOARD</p>
                        </div>
                        <p>Andrés Rodríguez es el actual jefe de Keyboard, una de las empresas líderes en la industria.</p>
                        <ul class="social-icons">
                            <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Team Item Ends -->
            </div>
            <div class="col-lg-6 col-md-12 col-xs-12">
                <!-- Team Item Starts -->
                <div class="team-item wow fadeInRight" data-wow-delay="0.2s">
                    <div class="team-img">
                        <img class="img-fluid" src="assets/img/team/Mesa%20de%20trabajo%20–%205.png" alt="">
                    </div>
                    <div class="contetn">
                        <div class="info-text">
                            <h3><a href="#">Julio Bonifacio</a></h3>
                            <p>Lider de KEYBOARD</p>
                        </div>
                        <p>Julio Bonifacio es un líder en la industria de la tecnología y fundador de la empresa Keyboard.</p>
                        <ul class="social-icons">
                            <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Team Item Ends -->
            </div>
            <div class="col-lg-6 col-md-12 col-xs-12">
                <!-- Team Item Starts -->
                <div class="team-item wow fadeInRight" data-wow-delay="0.8s">
                    <div class="team-img">
                        <img class="img-fluid" src="assets/img/team/Mesa%20de%20trabajo%20–%206.png" alt="">
                    </div>
                    <div class="contetn">
                        <div class="info-text">
                            <h3><a href="#">Alejandra Reyes </a></h3>
                            <p>Programadora Front-end</p>
                        </div>
                        <p>Alejandra Reyes es una experta en programación Front-end con amplia experiencia en la industria tecnológica..</p>
                        <ul class="social-icons">
                            <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Team Item Ends -->

                <!-- Team Item Starts -->

                <!-- Team Item Ends -->
            </div>
            <div class="col-lg-6 col-md-12 col-xs-12">
                <!-- Team Item Starts -->
                <div class="team-item wow fadeInRight" data-wow-delay="0.2s">
                    <div class="team-img">
                        <img class="img-fluid" src="assets/img/team/mesa10.png" alt="">
                    </div>
                    <div class="contetn">
                        <div class="info-text">
                            <h3><a href="#">Sebastian barragan</a></h3>
                            <p>Programador back-end</p>
                        </div>
                        <p>Sebastián Barragán, un ingeniero de software con una amplia experiencia en programación de back-end.</p>
                        <ul class="social-icons">
                            <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Team Item Ends -->
            </div>
            <div class="col-lg-6 col-md-12 col-xs-12">
                <!-- Team Item Starts -->
                <div class="team-item wow fadeInRight" data-wow-delay="0.2s">
                    <div class="team-img">
                        <img class="img-fluid" src="assets/img/team/Mesa%20de%20trabajo%20–%204.png" alt="">
                    </div>
                    <div class="contetn">
                        <div class="info-text">
                            <h3><a href="#">Juan MOsquera</a></h3>
                            <p>Diseñador </p>
                        </div>
                        <p>Juan Mosquera, un diseñador con experiencia en una amplia variedad de proyectos de diseño.</p>
                        <ul class="social-icons">
                            <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Team Item Ends -->
            </div> <div class="col-lg-6 col-md-12 col-xs-12">
                <!-- Team Item Starts -->
                <div class="team-item wow fadeInRight" data-wow-delay="0.2s">
                    <div class="team-img">
                        <img class="img-fluid" src="assets/img/team/Imagen%20de%20WhatsApp%202023-02-21%20a%20las%2019.50.33.png"  alt="">
                    </div>
                    <div class="contetn">
                        <div class="info-text">
                            <h3><a href="#">Jesus mulford</a></h3>
                            <p>Ingeniero en reparacion</p>
                        </div>
                        <p>Jesús Mulford, un ingeniero altamente capacitado y experimentado. Con habilidades en áreas como la reparación de hardware.</p>
                        <ul class="social-icons">
                            <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Team Item Ends -->
            </div> <div class="col-lg-6 col-md-12 col-xs-12">
                <!-- Team Item Starts -->
                <div class="team-item wow fadeInRight" data-wow-delay="0.2s">
                    <div class="team-img">
                        <img class="img-fluid" src="assets/img/team/Imagen de WhatsApp 2023-03-16 a las 12.26.33.jpg" alt="">
                    </div>
                    <div class="contetn">
                        <div class="info-text">
                            <h3><a href="#">Luis avila</a></h3>
                            <p>Programador back-end</p>
                        </div>
                        <p>Luis Ávila, un desarrollador back-end altamente capacitado y experimentado.</p>
                        <ul class="social-icons">
                            <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Team Item Ends -->
            </div>


            <!-- Team Item Starts -->

            <!-- Team Item Ends -->
        </div>




    </div>
    </div>
</section>
<!-- Team Section End -->

<!-- Pricing section Start -->

<!-- Pricing Table Section End -->

<!-- Testimonial Section Start -->
<section id="testimonial" class="testimonial section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div id="testimonials" class="owl-carousel wow fadeInUp" data-wow-delay="1.2s">
                    <div class="item">
                        <div class="testimonial-item">
                            <div class="img-thumb">
                                <img src="assets/img/testimonial/reseñas.jpg" style="width: 100px;height: 100px;object-fit: cover" alt="">
                            </div>
                            <div class="info">
                                <h2><a href="#">Cristian Cuadrado</a></h2>
                                <h3><a href="#">Developer Full-Stack</a></h3>
                            </div>
                            <div class="content">
                                <p class="description">Recientemente contraté los servicios de Keyboard de mantenimiento y, en general, quedé satisfecho con el trabajo realizado. En primer lugar, me gustaría destacar la profesionalidad y conocimiento técnico del personal.</p>
                                <div class="star-icon mt-3">
                                    <span><i class="lni-star-filled"></i></span>
                                    <span><i class="lni-star-filled"></i></span>
                                    <span><i class="lni-star-filled"></i></span>
                                    <span><i class="lni-star-filled"></i></span>
                                    <span><i class="lni-star-filled"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-item">
                            <div class="img-thumb">
                                <img src="assets/img/testimonial/img2.jpg" alt="">
                            </div>
                            <div class="info">
                                <h2><a href="#">Domeni GEsson</a></h2>
                                <h3><a href="#">Awesome Technology co.</a></h3>
                            </div>
                            <div class="content">
                                <p class="description">Recientemente contraté sus servicos de mantenimiento para reparar algunos equipos en mi negocio. Si bien el trabajo se completó con éxito, no puedo dar una calificación más alta que 3 estrellas porque demoraron un poco en programar la cita</p>
                                <div class="star-icon mt-3">
                                    <span><i class="lni-star-filled"></i></span>
                                    <span><i class="lni-star-filled"></i></span>
                                    <span><i class="lni-star-filled"></i></span>
                                    <span><i class="lni-star-half"></i></span>
                                    <span><i class="lni-star-half"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-item">
                            <div class="img-thumb">
                                <img src="assets/img/testimonial/img3.jpg" alt="">
                            </div>
                            <div class="info">
                                <h2><a href="#">Dommini Albert</a></h2>
                                <h3><a href="#">Nesnal Design co.</a></h3>
                            </div>
                            <div class="content">
                                <p class="description">Muy buenos servicios e quedado satisfecho con todo.</p>
                                <div class="star-icon mt-3">
                                    <span><i class="lni-star-filled"></i></span>
                                    <span><i class="lni-star-filled"></i></span>
                                    <span><i class="lni-star-filled"></i></span>
                                    <span><i class="lni-star-filled"></i></span>
                                    <span><i class="lni-star-filled"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-item">
                            <div class="img-thumb">
                                <img src="assets/img/testimonial/img4.jpg"  style="width: 100px;height: 100px;object-fit: cover" alt="">
                            </div>
                            <div class="info">
                                <h2><a href="#">Rony</a></h2>
                                <h3><a href="#">engineer</a></h3>
                            </div>
                            <div class="content">
                                <p class="description">Tuve una experiencia positiva con su empresa el mantenimiento que contraté para reparar algunos equipos en mi empresa. Desde el primer contacto, la atención al cliente fue excelente, respondiendo de manera rápida y clara a todas mis preguntas.</p>
                                <div class="star-icon mt-3">
                                    <span><i class="lni-star-filled"></i></span>
                                    <span><i class="lni-star-filled"></i></span>
                                    <span><i class="lni-star-filled"></i></span>
                                    <span><i class="lni-star-filled"></i></span>
                                    <span><i class="lni-star-filled"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonial Section End -->

<!-- Call To Action Section Start -->

<!-- Call To Action Section Start -->

<!-- Contact Section Start -->
<section id="contact" class="section-padding bg-gray">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"></h2>
            <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="row contact-form-area wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-lg-7 col-md-12 col-sm-12">
                <div class="contact-block">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/KKkSry4aNyk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-xs-12">
                <div class="map">
                    <object >
                        <iframe style="border:0; height: 280px; width: 100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d245.27446920585612!2d-75.4965559843967!3d10.390446848490793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ef625c37aec54b1%3A0xda54a062cdc632b0!2sUniversidad%20del%20Sin%C3%BA%20El%C3%ADas%20Bechara%20Zain%C3%BAm%2C%20Seccional%20Cartagena!5e0!3m2!1ses!2sco!4v1676909122929!5m2!1ses!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </object>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->

<!-- Footer Section Start -->
<footer id="footer" class="footer-area section-padding">
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
                    <div class="widget">
                        <h3 class="footer-logo"><img src="assets/img/logotranbspatrent.png" alt=""></h3>
                        <div class="textwidget">
                            <p>Nuestra empresa está presente en varias redes sociales para conectar con nuestros clientes y seguidores. A continuación, te presentamos los enlaces y descripciones de nuestras cuentas.</p>
                        </div>
                        <div class="social-icon">
                            <a class="facebook" href="#"><i class="lni-facebook-filled"></i></a>
                            <a class="twitter" href="#"><i class="lni-twitter-filled"></i></a>
                            <a class="instagram" href="#"><i class="lni-instagram-filled"></i></a>
                            <a class="linkedin" href="#"><i class="lni-linkedin-filled"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                    <h3 class="footer-titel">Productos</h3>
                    <ul class="footer-link">
                        <li><a href="#">Computadores</a></li>
                        <li><a href="#">Componentes de computadores</a></li>
                        <li><a href="#">cursos educativos</a></li>

                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                    <h3 class="footer-titel">Contact</h3>
                    <ul class="address">
                        <li>
                            <a href="#"><i class="lni-map-marker"></i> Distrito Turístico Y Cultural, Tv. 54 #41-117, </br> Cartagena de Indias, Cartagena, Provincia de Cartagena, Bolívar</a>
                        </li>
                        <li>
                            <a href="#"><i class="lni-phone-handset"></i> +57 323 3747844</a>
                        </li>
                        <li>
                            <a href="#"><i class="lni-envelope"></i> E: Keyboard@outlook.com</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright-content">

                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Go to Top Link -->


<!-- Preloader -->
<div id="preloader">
    <div class="loader" id="loader-1"></div>
</div>
<!-- End Preloader -->

<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

{{--<scritp src="https://poe-socket.onrender.com/socket.io/socket.io.js"></scritp>--}}
{{--<script src="./js/socket.js"></script>--}}

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
