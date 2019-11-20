<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html lang="en">
  <head>
    <title>Bienvenidos | Salón de Eventos</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="fonts/icomoon/style.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/jquery.fancybox.min.css">
        <link rel="stylesheet" href="css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
        <link rel="stylesheet" href="css/aos.css">
        <link rel="stylesheet" href="css/style.css">
  </head>
    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Cargando...</span>
    </div>
  </div>
  <div class="site-wrap">
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">
      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-xl-2">
            <div class="logo"><a href="#"><img src="images/logo.png" alt="Sports"></a></div>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Inicio</a></li>
                <li><a href="#about-section" class="nav-link">Conocenos</a></li>
                <li><a href="#blog-section" class="nav-link">Servicios</a></li>
                <li><a href="#contact-section" class="nav-link">Contactos</a></li>
                <li>                <div class="nav-link">
                    @if (Route::has('login'))
                        <div class="nav-link">
                            @auth
                                <a href="{{ url('/home') }}">Regresar</a>
                            @else
                                <li><a href="{{ route('login') }}">Iniciar Sesión</a></li>

                              @if (Route::has('register'))
                              <li><a href="{{ route('register') }}">Registrarse</a></li>
                                @endif
                            @endauth
                        </div>
                    @endif
                </li>
              </ul>
            </nav>
          </div>
          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>
        </div>
      </div>
    </header>

    {{-- CARROSUEL - INNICIO --}}

    <div class="site-blocks-cover overlay" style="background-image: url(images/hero_2.jpg);" data-aos="fade" id="home-section">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-10 mt-lg-5 text-center">
            <div class="single-text owl-carousel">
              <div class="slide">
                <h1 class="text-uppercase" data-aos="fade-up">CELEBRALO</h1>
                <p class="mb-5 desc"  data-aos="fade-up" data-aos-delay="100">Bienvenidos</p>
                <p class="mb-5 desc"  data-aos="fade-up" data-aos-delay="100">SALON DE EVENTOS Empresa que nos dedicamos a la producción de eventos</p>
                <div data-aos="fade-up" data-aos-delay="100">
                </div>
              </div>
              <div class="slide">
                <h1 class="text-uppercase" data-aos="fade-up">SERVICIOS PARA EVENTOS SOCIALES</h1>
                <p class="mb-5 desc" data-aos="fade-up" data-aos-delay="100">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Repudiandae minima delectus accusamus accusantium deleniti libero excepturi porro illo.</p>
                <div data-aos="fade-up" data-aos-delay="100">
                </div>
              </div>
              <div class="slide">
                <h1 class="text-uppercase" data-aos="fade-up">SERVICIOS PARA EVENTOS CORPORATIVOS</h1>
                <p class="mb-5 desc" data-aos="fade-up" data-aos-delay="100">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Repudiandae minima delectus accusamus accusantium deleniti libero excepturi porro illo.</p>
                <div data-aos="fade-up" data-aos-delay="100">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- SECCION DE INFORMACION QUIENES SOMOS --}}

    <div class="site-section cta-big-image" id="about-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-8 text-center">
            <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay="">Bienvenidos</h2>
            <p class="lead" data-aos="fade-up" data-aos-delay="100">Somos una empresa que nos dedicamos a la producción de eventos como bodas, XV años, graduaciones, congresos, aniversarios, cumpleaños, bautizos y eventos empresariales.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
            <figure class="circle-bg">
            <img src="images/img_2.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
            </figure>
          </div>
          <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
            <h3 class="text-black mb-4">Salón de Eventos</h3>
            <p>Puedes estar seguro de que encontrarás una variedad de servicios que necesitas para que tu evento luzca como debe ser.</p>
            <p>Confia en nuestra experiencia, capacitación y profesionalismo para que tu y tus invitados disfruten la fiesta a lo máximo..</p>
          </div>
        </div>
      </div>
    </div>

    {{-- SECCIÓN DE SERVICIO/CATÁLGOS --}}

    <section class="site-section" id="blog-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Paquetes de Servicios</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="">
            <div class="h-entry">
              <a href="single.html">
                <img src="images/img_1.jpg" alt="Image" class="img-fluid">
              </a>
              <h2 class="font-size-regular"><a href="#">Eventos Sociales</a></h2>
              <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
              <p><a href="#">Continue Reading...</a></p>
            </div>


          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="h-entry">
              <a href="single.html">
                <img src="images/img_4.jpg" alt="Image" class="img-fluid">
              </a>
              <h2 class="font-size-regular"><a href="#">Eventos Corporativos</a></h2>
              <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
              <p><a href="#">Continue Reading...</a></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="h-entry">
              <a href="single.html">
                <img src="images/img_3.jpg" alt="Image" class="img-fluid">
              </a>
              <h2 class="font-size-regular"><a href="#">Wedding Planer</a></h2>
              <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
              <p><a href="#">Continue Reading...</a></p>
            </div>
          </div>

        </div>
      </div>
    </section>


    {{-- SECCIÓN DE CONTACTOS - LUIS ÁNGEL REYES --}}

    <section class="site-section bg-light" id="contact-section" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Contáctanos</h2>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-md-4 text-center">
            <p class="mb-4">
              <span class="icon-room d-block h2 text-primary"></span>
              <span>Tuxtla Gutiérrez, Chiapas</span>
            </p>
          </div>
          <div class="col-md-4 text-center">
            <p class="mb-4">
              <span class="icon-phone d-block h2 text-primary"></span>
              <a href="#">961 19 664 17</a>
            </p>
          </div>
          <div class="col-md-4 text-center">
            <p class="mb-0">
              <span class="icon-mail_outline d-block h2 text-primary"></span>
              <a href="#">Celebralo@gmail.com</a>
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-5">
            <form action="#" class="p-5 bg-white">
              <h2 class="h4 text-black mb-5">Formulario de Contactos</h2>
              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Nombre</label>
                  <input type="text" id="fname" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Apellidos</label>
                  <input type="text" id="lname" class="form-control">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="email">Correo</label>
                  <input type="email" id="email" class="form-control">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="subject">Asunto</label>
                  <input type="subject" id="subject" class="form-control">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Mensaje</label>
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Escribe aqui....."></textarea>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Enviar" class="btn btn-primary btn-md text-white">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    {{-- FOOTER - NOMBRE DE LOS INTEGRANTES DEL EQUIPO --}}

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-5">
                <h2 class="footer-heading mb-4">Salón de Eventos</h2>
                <p>Gracias por tu visita y te invitamos a que conozcas nuestros servicios  y por favor haznos saber tus dudas y con gusto te responderemos lo más pronto posible! </p>
              </div>
              <div class="col-md-3 footer-social">
                <h2 class="footer-heading mb-4">Siguenos en Redes Sociales</h2>
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <h2 class="footer-heading mb-4">Integrantes Equipo 4</h2>
            <ul class="item-list">
                    <li class="footer-heading mb-4">Luis Ángel Reyes Pérez</li>
                    <li class="footer-heading mb-4">Luis Ángel Santiz</li>
                    <li class="footer-heading mb-4">Ivan iguel Chame Marroqin</li>
                </ul>
          </div>
        </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
                <p>Equipo 4 | Grupo S8A</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/main.js"></script>
  </body>
</html>
