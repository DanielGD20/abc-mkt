<!doctype html>
<html lang="{{ app()->getLocale() }}">
@include('util.header')

<body>

  @include('util.videoHeader')

  <div class="site-section">
    <div class="container" data-aos="fade-up">
      <div class="row" style="margin-top: -5% !important; margin-bottom: -5% !important">
        <div class="text-center mb-5 w-border col-md-8 mx-auto site-section-heading">
          <a href="#" data-toggle="modal" data-target="#modalInstrucciones">
            <h2 class="mb-5">Como Realizar tu Petición</h2>
          </a>
        </div>
      </div>
      <br>

      <section>
        <!-- Grid row -->
        <div class="row mx-1">
          <!-- Grid column -->
          <div class="col-md-4 mb-4">
            <!-- Card -->
            <div class="card card-image"
              style="background-image: url({{ asset('images/Presentaciones/artes-presentaciones.jpg') }});">
              <!-- Content -->
              <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                <div>
                  <h3 class="card-title pt-2"><strong>Artes</strong></h3>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. P
                  </p>
                  <a href="{{ url('/productos/Artes') }}" class="btn btn-pink"><i class="fas fa-clone left"></i>Realizar
                    Petición</a>
                </div>
              </div>
            </div>
            <!-- Card -->
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 mb-4">
            <!-- Card -->
            <div class="card card-image"
              style="background-image: url({{ asset('images/Presentaciones/articulos-presentaciones.jpg') }});">
              <!-- Content -->
              <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                <div>
                  <h3 class="card-title pt-2"><strong>Artículos Promocionales</strong></h3>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. P
                  </p>
                  <a href="{{ url('/productos/Articulos-promocionales') }}" class="btn btn-blue"><i
                      class="fas fa-clone left"></i>Realizar Petición</a>
                </div>
              </div>

            </div>
            <!-- Card -->
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 mb-4">
            <!-- Card -->
            <div class="card card-image"
              style="background-image: url({{ asset('images/Presentaciones/social-presentaciones.jpg') }});">
              <!-- Content -->
              <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                <div>
                  <h3 class="card-title pt-2"><strong>Campañas Publicitarias</strong></h3>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. P
                  </p>
                  <a class="btn btn-pink"><i class="fas fa-clone left"></i>Realizar Petición</a>
                </div>
              </div>
            </div>
            <!-- Card -->
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->

        <!-- Grid row -->
        <div class="row mx-1">

          <!-- Grid column -->
          <div class="col-md-4 mb-4">
            <!-- Card -->
            <div class="card card-image"
              style="background-image: url({{ asset('images/Presentaciones/pautadas-presentaciones.jpg') }});">
              <!-- Content -->
              <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                <div>
                  <h3 class="card-title pt-2"><strong>Campañas Pautadas</strong></h3>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. P
                  </p>
                  <a class="btn btn-blue"><i class="fas fa-clone left"></i>Realizar Petición</a>
                </div>
              </div>

            </div>
            <!-- Card -->
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 mb-4">
            <!-- Card -->
            <div class="card card-image"
              style="background-image: url({{ asset('images/Presentaciones/crm-presentaciones.jpg') }});">
              <!-- Content -->
              <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                <div>
                  <h3 class="card-title pt-2"><strong>Automatizaciones / CRM</strong></h3>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. P
                  </p>
                  <a class="btn btn-pink"><i class="fas fa-clone left"></i>Realizar Petición</a>
                </div>
              </div>
            </div>
            <!-- Card -->
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 mb-4">
            <!-- Card -->
            <div class="card card-image"
              style="background-image: url({{ asset('images/Presentaciones/senaleticas-presentaciones.jpg') }});">
              <!-- Content -->
              <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                <div>
                  <h3 class="card-title pt-2"><strong>Señaleticas y Stands</strong></h3>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. P
                  </p>
                  <a class="btn btn-blue"><i class="fas fa-clone left"></i>Realizar Petición</a>
                </div>
              </div>

            </div>
            <!-- Card -->
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->
      </section>

    </div>
  </div>

  <div class="site-section bg-dark">
    <div class="container" data-aos="fade-up">
      <div class="row" style="margin-bottom: -7% !important">
        <div class="site-section-heading text-center mb-5 w-border col-md-12 mx-auto">
          <h2 class="mb-5">¿Deseas pedir algo diferente?</h2>
          <p>
            Puedes dejarnos tu requerimiento ingresando al siguiente formulario
          </p>
          <br>
          <br>
          <a href="#" class="btn btn-blue btn-lg">Realizar Petición Especial</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="modalInstrucciones" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title text-dark text-center" id="exampleModalLabel">¿Como realizar una peticion?</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-dark" align="justify">
          <h3>Paso 1</h3>
          <p>
            Para poder realizar una peticion es necesario acceder a uno de los diferentes apartados con los cuales
            cuenta el sitio web.
          </p>
          <h3>Paso 2</h3>
          <p>
            Una vez dentro de debe escoger que tipo de materiales se necesitaran y agregarlos al carrito de peticiones.
          </p>
          <h3>Paso 3</h3>
          <p>
            Finalmente se debera ir al apartado de peticiones para confirmar la peticion e ingresar los datos siendo lo
            mas claro posible para que puedan ser ejecutados.
          </p>
        </div>
      </div>
    </div>
  </div>

  @include('util.footer')

</body>


</html>