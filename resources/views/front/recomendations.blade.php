<div class="colorlib-shop">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
                <h2><span>Productos recomendados</span></h2>
            </div>
        </div>
        <div class="row">
            @foreach ($productos as $producto )

            <div class="col-md-3 text-center">
                <div class="product-entry">
                    <div class="product-img" style="background-image: url(../../images/item-5.jpg);">
                        <div class="cart">
                            <p>
                                <span class="addtocart"><a href="#"><i class="icon-shopping-cart"></i></a></span>
                                <span><a href="product-detail.html"><i class="icon-eye"></i></a></span>
                            </p>
                        </div>
                    </div>
                    <div class="desc">
                        <h3><a href="shop.html">{{ $producto -> nombre }}</a></h3>
                        <p class="price"><span>{{ $producto -> categoria }}</span></p>
                    </div>
                </div>
            </div>

            @endforeach
        </div>

    </div>
</div>