<!DOCTYPE HTML>
<html lang="{{ app()->getLocale() }}">
@include('util.header')

<body>

	@include('util.nav-header')

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
					{{-- 
					<div class="row">
						<div class="col-md-12">
							<ul class="pagination">
								<li class="disabled"><a href="#">&laquo;</a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">&raquo;</a></li>
							</ul>
						</div>
					</div> --}}
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

						{{-- 						
						<div class="side">
							<h2>Price Range</h2>
							<form method="post" class="colorlib-form-2">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label for="guests">Price from:</label>
											<div class="form-field">
												<i class="icon icon-arrow-down3"></i>
												<select name="people" id="people" class="form-control">
													<option value="#">1</option>
													<option value="#">200</option>
													<option value="#">300</option>
													<option value="#">400</option>
													<option value="#">1000</option>
												</select>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label for="guests">Price to:</label>
											<div class="form-field">
												<i class="icon icon-arrow-down3"></i>
												<select name="people" id="people" class="form-control">
													<option value="#">2000</option>
													<option value="#">4000</option>
													<option value="#">6000</option>
													<option value="#">8000</option>
													<option value="#">10000</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
						<div class="side">
							<h2>Color</h2>
							<div class="color-wrap">
								<p class="color-desc">
									<a href="#" class="color color-1"></a>
									<a href="#" class="color color-2"></a>
									<a href="#" class="color color-3"></a>
									<a href="#" class="color color-4"></a>
									<a href="#" class="color color-5"></a>
								</p>
							</div>
						</div>
						<div class="side">
							<h2>Size</h2>
							<div class="size-wrap">
								<p class="size-desc">
									<a href="#" class="size size-1">xs</a>
									<a href="#" class="size size-2">s</a>
									<a href="#" class="size size-3">m</a>
									<a href="#" class="size size-4">l</a>
									<a href="#" class="size size-5">xl</a>
									<a href="#" class="size size-5">xxl</a>
								</p>
							</div>
						</div> --}}
					</div>
				</div>
			</div>
		</div>
	</div>

	@include('util.footer')

</body>

</html>