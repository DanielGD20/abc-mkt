<!DOCTYPE HTML>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ABC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <link rel="icon" href="https://uees.edu.ec/img/cropped-Icono-web-32x32.png" sizes="32x32" />
    <link rel="icon" href="https://uees.edu.ec/img/cropped-Icono-web-192x192.png" sizes="192x192" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

    <!-- Date Picker -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <!-- Flaticons  -->
    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">

    <!-- Theme style  -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Modernizr JS -->
    <script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>

    <!--Custom css for video header-->
    <script src="{{ asset('css/custom.css') }}"></script>

    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<!-- Este es el body del documento con el header pepa-->

<body>

    @include('front.menu')

    @if ($principal)

    <aside id="colorlib-hero">
        <div class="flexslider">
            <ul class="slides">
                <li style="background-image: url(images/banner1.jpg);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-2 col-sm-12 col-xs-12 slider-text">
                                <div class="slider-text-inner">
                                    <div class="desc">
                                        <br>
                                        <h3 class="head-1">Diseños</h3>
                                        <h3 class="head-2">Artes</h3>
                                        <p><a href="{{ url('/shop/Artes') }}" class="btn btn-primary btn-sm">Revisar
                                                las
                                                opciones</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(images/banner2.jpg);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-2 col-sm-12 col-xs-12 slider-text">
                                <div class="slider-text-inner">
                                    <div class="desc">
                                        <h4 class="head-1">Campañas</h4>
                                        <h3 class="head-2">Publicitarias</h3>
                                        <p><a href="{{ url('/shop/Articulos-Promocionales') }}"
                                                class="btn btn-primary btn-sm">Revisar las
                                                opciones</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(images/banner3.jpg);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 slider-text">
                                <div class="slider-text-inner">
                                    <div class="desc">
                                        <h3 class="head-1">Automatiza</h3>
                                        <h3 class="head-2">Ventas</h3>
                                        <h3 class="head-3">CRM & Mailing</h3>
                                        <p><a href="{{ url('/shop/crm') }}" class="btn btn-primary btn-sm">Revisar
                                                las
                                                opciones</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>

    @else

    <aside id="colorlib-hero" class="breadcrumbs">
        <div class="flexslider">
            <ul class="slides">
                <li style="background-image: url(../../images/banner1.jpg);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                                <div class="slider-text-inner text-center">
                                    <h1></h1>
                                    <h2 class="bread">
                                        <span>
                                            <a href="{{ url('/') }}">Inicio</a>
                                        </span>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>
    @endif





    @yield('content')

    <!--Footer importante-->
    <div id="colorlib-subscribe">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="col-md-12 text-center">
                        <h1 class="text-white"><i class="icon-paperplane"></i>ABC</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer id="colorlib-footer" role="contentinfo">
        <div class="container">
            <div class="row row-pb-md">
                <div class="col-md-6 colorlib-widget" align="center">
                    <h4>Síguenos en nuestras redes sociales</h4>
                    <ul class="colorlib-social-icons">
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin"></i></a></li>
                        <li><a href="#"><i class="icon-dribbble"></i></a></li>
                    </ul>
                    </p>
                </div>

                <div class="col-md-6" align="center">
                    <h4>Información de contacto</h4>
                    <ul class="colorlib-footer-links">
                        <li>Km. 2,5 vía a Samborondón</li>
                        <li><a href="tel://+593 994504722">+593 99 450 4722</a></li>
                        <li><a href="mailto:anavelezh@uees.edu.ec">anavelezh@uees.edu.ec</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copy">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>

                        <span class="block">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> Todos los derechos reservados | con <i class="icon-heart2" aria-hidden="true"></i>
                            por
                            <a href="https://twitter.com/DanielGD40" target="_blank">DanielGD40 & Colorlib</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- jQuery Easing -->
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Waypoints -->
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <!-- Flexslider -->
    <script src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
    <!-- Owl carousel -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/magnific-popup-options.js') }}"></script>
    <!-- Date Picker -->
    <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
    <!-- Stellar Parallax -->
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <!-- Main -->
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- video -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>