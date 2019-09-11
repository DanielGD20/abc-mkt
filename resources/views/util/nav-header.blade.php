<div class="colorlib-loader"></div>

<div id="page">
    <nav class="colorlib-nav" role="navigation">
        <div class="top-menu">
            <div class="container">
                <div class="row">
                    <div class="col-xs-2">
                        <div id="colorlib-logo"><a href="{{ url('/') }}">ABC</a></div>
                    </div>
                    <div class="col-xs-10 text-right menu-1">
                        <ul>
                            <li><a href="{{ url('/') }}">Inicio</a></li>
                            <li>
                                <a href="{{ url('/shop') }}">Productos</a>
                            </li>
                            <li><a href="{{ url('/about') }}">Sobre nosotros</a></li>
                            <li><a href="{{ url('/contact') }}">Contacto</a></li>
                            <li><a href="{{ url('/cart') }}"><i class="icon-shopping-cart"></i> Carrito [0]</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    @if ( $url == 'inicio')
    <aside id="colorlib-hero">
        <div class="flexslider">
            <ul class="slides">
                <li style="background-image: url(images/img_bg_1.jpg);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-2 col-sm-12 col-xs-12 slider-text">
                                <div class="slider-text-inner">
                                    <div class="desc">
                                        <h1 class="head-1">Men's</h1>
                                        <h2 class="head-2">Jeans</h2>
                                        <h2 class="head-3">Collection</h2>
                                        <p class="category"><span>New stylish shirts, pants &amp; Accessories</span>
                                        </p>
                                        <p><a href="#" class="btn btn-primary">Shop Collection</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(images/img_bg_2.jpg);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-2 col-sm-12 col-xs-12 slider-text">
                                <div class="slider-text-inner">
                                    <div class="desc">
                                        <h1 class="head-1">Huge</h1>
                                        <h2 class="head-2">Sale</h2>
                                        <h2 class="head-3">45% off</h2>
                                        <p class="category"><span>New stylish shirts, pants &amp; Accessories</span>
                                        </p>
                                        <p><a href="#" class="btn btn-primary">Shop Collection</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(images/img_bg_3.jpg);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 slider-text">
                                <div class="slider-text-inner">
                                    <div class="desc">
                                        <h1 class="head-1">New</h1>
                                        <h2 class="head-2">Arrival</h2>
                                        <h2 class="head-3">up to 30% off</h2>
                                        <p class="category"><span>New stylish shirts, pants &amp; Accessories</span>
                                        </p>
                                        <p><a href="#" class="btn btn-primary">Shop Collection</a></p>
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
                <li style="background-image: url(images/cover-img-1.jpg);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                                <div class="slider-text-inner text-center">
                                    <h1>Product Detail</h1>
                                    <h2 class="bread"><span><a href="index.html">Home</a></span> <span><a
                                                href="shop.html">Product</a></span> <span>Product Detail</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>

    @endif