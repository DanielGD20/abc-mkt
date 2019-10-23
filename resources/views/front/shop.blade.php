@extends('front.master')
@section('content')
<?php $principal = false?>
<div class="colorlib-shop">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-push-2">
				<div class="row row-pb-lg">
					@foreach ($productos as $producto)
					<div class="col-md-4 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(../images/item-5.jpg);">
								<p class="tag"><span class="new">{{ $producto -> estado }}</span></p>
								<div class="cart">
									<p>
										<span class="addtocart"><a href="{{ url('/cart') }}"><i
													class="icon-shopping-cart"></i></a></span>
										<span><a
												href="{{ url('product-detail/'. $producto -> id . '/'. $producto -> nombre) }}">
												<i class="icon-eye"></i></a></span>
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="product-detail.html">{{ $producto -> nombre }}</a></h3>
								<p class="price"><span>{{ $producto -> detalle }}</span></p>
							</div>
						</div>
					</div>
					@endforeach

				</div>
			</div>

			<div class="col-md-2 col-md-pull-10">
				<div class="sidebar">
					<div class="side">
						<h2>Categorías</h2>
						<div class="fancy-collapse-panel">
							<div class="panel panel-group">

								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a href="{{ url('/shop/Artes') }}">Artes</a>
										</h4>
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a href="{{ url('/shop/Articulos-Promocionales') }}">Artículos
												Publicitarios</a>
										</h4>
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a href="">Campañas Publicitarias</a>
										</h4>
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a href="">Campañas Pautadas en redes</a>
										</h4>
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a href="">CRM</a>
										</h4>
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a href="">Señaléticas Stands</a>
										</h4>
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a href="">Otros</a>
										</h4>
									</div>
								</div>

							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>

@endsection