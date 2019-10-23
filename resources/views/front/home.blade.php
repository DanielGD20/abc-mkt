@extends('front.master')

@section('content')
<?php $principal = true?>
<div class="colorlib-shop">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
                <h2><span>Nuestros productos</span></h2>
            </div>
        </div>
        <div class="row">

            <div class="col-md-4 text-center">
                <div class="product-entry">
                    <div class="product-img"
                        style="background-image: url(images/Presentaciones/artes-presentaciones.jpg);">
                        <div class="cart">
                            <p>
                                <span><a href="{{ url('/shop/Artes') }}"><i class="icon-eye"></i></a></span>
                            </p>
                        </div>
                    </div>
                    <div class="desc">
                        <h3><a href="shop.html">Artes</a></h3>
                    </div>
                </div>
            </div>

            <div class="col-md-4 text-center">
                <div class="product-entry">
                    <div class="product-img"
                        style="background-image: url(images/Presentaciones/articulos-presentaciones.jpg);">
                        <div class="cart">
                            <p>
                                <span><a href="{{ url('/shop/Articulos-Promocionales') }}"><i
                                            class="icon-eye"></i></a></span>
                            </p>
                        </div>
                    </div>
                    <div class="desc">
                        <h3><a href="shop.html">Artículos Promocionales</a></h3>
                    </div>
                </div>
            </div>

            <div class="col-md-4 text-center">
                <div class="product-entry">
                    <div class="product-img"
                        style="background-image: url(images/Presentaciones/social-presentaciones.jpg);">
                        <div class="cart">
                            <p>
                                <span><a href="product-detail.html"><i class="icon-eye"></i></a></span>
                            </p>
                        </div>
                    </div>
                    <div class="desc">
                        <h3><a href="shop.html">Campaña Publicitaria</a></h3>
                    </div>
                </div>
            </div>

            <div class="col-md-4 text-center">
                <div class="product-entry">
                    <div class="product-img"
                        style="background-image: url(images/Presentaciones/pautadas-presentaciones.jpg);">
                        <div class="cart">
                            <p>
                                <span><a href="product-detail.html"><i class="icon-eye"></i></a></span>
                            </p>
                        </div>
                    </div>
                    <div class="desc">
                        <h3><a href="shop.html">Campaña Pautada</a></h3>
                    </div>
                </div>
            </div>

            <div class="col-md-4 text-center">
                <div class="product-entry">
                    <div class="product-img"
                        style="background-image: url(images/Presentaciones/crm-presentaciones.jpg);">
                        <div class="cart">
                            <p>
                                <span><a href="product-detail.html"><i class="icon-eye"></i></a></span>
                            </p>
                        </div>
                    </div>
                    <div class="desc">
                        <h3><a href="shop.html">CRM & Mailing</a></h3>
                    </div>
                </div>
            </div>

            <div class="col-md-4 text-center">
                <div class="product-entry">
                    <div class="product-img"
                        style="background-image: url(images/Presentaciones/senaleticas-presentaciones.jpg);">
                        <div class="cart">
                            <p>
                                <span><a href="product-detail.html"><i class="icon-eye"></i></a></span>
                            </p>
                        </div>
                    </div>
                    <div class="desc">
                        <h3><a href="shop.html">Señaleticas | Stands</a></h3>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div id="colorlib-intro" class="colorlib-intro" style="background-image: url(images/bannerfot.jpg); margin-bottom: 0%;"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="intro-desc">
                    <div class="text-salebox">
                        <div class="text-lefts">
                            <div class="sale-box">
                                <div class="sale-box-top">
                                    <h2 class="number">Realiza</h2>
                                    <span class="sup-1">tus</span>
                                    <span class="sup-2">pedidos</span>
                                </div>
                                <h2 class="text-sale">Hoy</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection