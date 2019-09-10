<div class="site-wrap">
    <div class="site-navbar mt-2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-12 col-lg-4">
                    <h1 class="mb-0">
                        <a href="{{ url('/') }}" class="text-white h2 mb-0"><strong>ABC<span
                                    class="text-primary">.</span></strong></a>
                    </h1>
                </div>
                <div class="col-12 col-md-12 col-lg-8">
                    <nav class="site-navigation text-right text-md-right" role="navigation">
                        <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3">
                            <a href="#" class="site-menu-toggle js-menu-toggle text-white"><span
                                    class="icon-menu h3"></span></a>
                        </div>

                        <ul class="site-menu js-clone-nav d-none d-lg-block">
                            <li>
                                <a href="{{ url('/') }}">Inicio</a>
                            </li>
                            <li class="has-children">
                                <a href="#">Peticiones</a>
                                <ul class="dropdown arrow-top">
                                    <li><a href="{{ url('/productos/Artes') }}">Artes</a></li>
                                    <li><a href="{{ url('/productos/Articulos-Promocionales') }}">Artículos
                                            Promocionales</a></li>
                                    <li><a href="{{ url('/productos/Campana-Publicitaria') }}">Campaña Publicitaria</a>
                                    </li>
                                    <li><a href="{{ url('/productos/Campana-Pautada') }}">Campañas Pautadas</a>
                                    </li>
                                    <li><a href="{{ url('/productos/Campana-Publicitaria') }}">Publicidad Automática -
                                            CRM</a></li>
                                    <li><a href="{{ url('/productos/Crm') }}">Señaléticas / Stands</a>
                                    </li>
                                    <li><a href="{{ url('/productos/otros') }}">Otros</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url('/eventos') }}">Eventos</a></li>
                            <li><a href="{{ url('/nosotros') }}">Sobre el departamento</a></li>
                            <li><a href="{{ url('/carrito') }}">Petición</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>
<!-- .site-mobile-menu -->

<header>
    <div class="overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="{{ asset('images/fondo2.mp4') }}" type="video/mp4" />
    </video>
    <div class="container h-100">
        <div class="d-flex h-100 text-center align-items-center">
            <div class="w-100 text-white">
                <h1 class="display-3">ABC</h1>
                <h1>Marketing Department</h1>
            </div>
        </div>
    </div>
</header>