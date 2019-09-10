<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<!--Se incluyen las dependencias CSS-->
@include('util.header')

<body>

  <!--Aqui se incluye el header de video -->
  @include('util.videoHeader')
  <!--Fin del header-->

  <!-- Page Content -->

  <div class="site-section">
    <div class="container" data-aos="fade-up">

      <div class="row" style="margin-top: -5% !important; margin-bottom: -5% !important">
        <div class="text-center mb-5 w-border col-md-8 mx-auto site-section-heading">
          <h2 class="mb-5">Sección de Artes</h2>
        </div>
      </div>
      <div class="row">

        @foreach ($valores as $valor)
        @if ( $valor -> id < 10 ) <!-- Productos Artes -->
          <div class="col-xl-4 col-md-4 mb-4">
            <div class="card border-0 shadow">
              <img src="https://source.unsplash.com/TMgQMXoglsM/500x350" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title mb-0 text-dark">{{ $valor -> nombre }}</h5>
                <hr>
                <div class="card-text text-black-50">
                  <p>
                    {{ $valor -> descripcion }}
                  </p>
                </div>
              </div>
              <div class="card-footer text-center">
                <a href="" class="btn btn-blue">Agregar al carrito</a>
              </div>
            </div>
          </div>
          @elseif($valor -> id < 12) <!-- Productos Artes -->
            <div class="col-xl-6 col-md-6 md-4">
              <div class="card border-0 shadow">
                <img src="https://source.unsplash.com/TMgQMXoglsM/500x350" class="card-img-top" alt="...">
                <div class="card-body text-center">
                  <h5 class="card-title mb-0 text-dark">{{ $valor -> nombre }}</h5>
                  <hr>
                  <div class="card-text text-black-50">
                    <p>
                      {{ $valor -> descripcion }}
                    </p>
                  </div>
                </div>
                <div class="card-footer text-center">
                  <a href="" class="btn btn-blue">Agregar al carrito</a>
                </div>
              </div>
            </div>
            @endif
            @endforeach

            <!-- /.row -->
      </div>
      <!-- /.container -->
    </div>









    <!---Se incluyen las dependencias y la firma-->
    @include('util.footer')

</body>

</html>