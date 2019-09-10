<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<!--Se incluyen las dependencias CSS-->
@include('util.header')


<body>

  <!--Aqui se incluye el header de video -->
  @include('util.videoHeader')
  <!--Fin del header-->

  <div class="site-section">
    <div class="container" data-aos="fade-up">

      <div class="row" style="margin-top: -5% !important; margin-bottom: -4% !important">
        <div class="text-center mb-5 w-border col-md-8 mx-auto site-section-heading">
          <h2 class="mb-5">Resumen de la petición</h2>
        </div>
      </div>

      <div class="pb-5">
        <div class="container">

          <div class="row py-5 p-4 bg-white rounded shadow-sm" style="margin-bottom: -9% !important">


            <div class="col-lg-6">
              <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold text-dark">Instrucciones extra
              </div>
              <div class="p-4">
                <p class="font-italic mb-4 text-dark">Si cuenta con alguna indicación extra acerca de su petición, puede
                  dejarla en el recuadro de abajo.</p>
                <textarea name="" cols="30" rows="2" class="form-control"></textarea>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold text-dark">Valores finales
              </div>

              <div class="p-4">
                <p class="font-italic mb-4 text-dark">Revise bien los valores a los cuales se realizara la petición para
                  no tener inconvenientes en la entrega.</p>
                <ul class="list-unstyled mb-4">
                  <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Producto
                      1</strong>
                    <h5 class="text-dark">3</h5>
                  </li>
                  <li class="d-flex justify-content-between py-3 border-bottom"><strong
                      class="text-muted">Total</strong>
                    <h5 class="text-dark">Suma de los valores</h5>
                  </li>
                </ul>
                <a href="#" class="btn btn-dark rounded-pill py-2 btn-block">Realizar envió de petición</a>
                <a href="{{ url('/carrito') }}" class="btn btn-dark rounded-pill py-2 btn-block">Regresar a la selección
                  de productos</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <!---Se incluyen las dependencias y la firma-->
  @include('util.footer')

</body>

</html>