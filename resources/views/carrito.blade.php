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
          <div class="row">
            <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

              <!-- Shopping cart table -->
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col" class="border-0">
                        <div class="p-2 px-3 text-uppercase text-dark">Producto</div>
                      </th>
                      <th scope="col" class="border-0">
                        <div class="py-2 text-uppercase text-dark text-center">Cantidad</div>
                      </th>
                      <th scope="col" class="border-0">
                        <div class="py-2 text-uppercase text-dark text-center">Eliminar</div>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row" class="border-0">
                        <div class="p-2">
                          <img src="https://res.cloudinary.com/mhmd/image/upload/v1556670479/product-1_zrifhn.jpg"
                            alt="" width="70" class="img-fluid rounded shadow-sm">
                          <div class="ml-3 d-inline-block align-middle">
                            <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">Timex Unisex
                                Originals</a></h5><span
                              class="text-muted font-weight-normal font-italic d-block">Category: Watches</span>
                          </div>
                        </div>
                      </th>
                      <td class="border-0 align-middle text-dark text-center"><strong>3</strong></td>
                      <td class="border-0 align-middle text-center"><a href="#" class="text-dark"><i
                            class="fas fa-trash"></i></a></td>
                    </tr>
                    <tr>
                      <th scope="row">
                        <div class="p-2">
                          <img src="https://res.cloudinary.com/mhmd/image/upload/v1556670479/product-3_cexmhn.jpg"
                            alt="" width="70" class="img-fluid rounded shadow-sm">
                          <div class="ml-3 d-inline-block align-middle">
                            <h5 class="mb-0"><a href="#" class="text-dark d-inline-block">Lumix camera lense</a></h5>
                            <span class="text-muted font-weight-normal font-italic">Category: Electronics</span>
                          </div>
                        </div>
                      </th>
                      <td class="align-middle text-dark text-center"><strong>3</strong></td>
                      <td class="align-middle text-center"><a href="#" class="text-dark "><i
                            class="fas fa-trash"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">
                        <div class="p-2">
                          <img src="https://res.cloudinary.com/mhmd/image/upload/v1556670479/product-2_qxjis2.jpg"
                            alt="" width="70" class="img-fluid rounded shadow-sm">
                          <div class="ml-3 d-inline-block align-middle">
                            <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block">Gray Nike running shoe</a>
                            </h5><span class="text-muted font-weight-normal font-italic">Category: Fashion</span>
                          </div>
                        </div>
                      <td class="align-middle text-dark text-center"><strong>3</strong></td>
                      <td class="align-middle text-center"><a href="#" class="text-dark"><i
                            class="fas fa-trash"></i></a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- End -->
            </div>
          </div>
          <style>
            #centrar {
              display: flex;
              justify-content: center;
              align-items: center;
            }
          </style>
          <div class="row" style="margin-bottom: -10% !important;">
            <div class="col-lg-6" id="centrar">
              <a href="{{ url('/') }}" class="btn btn-blue btn-lg btn-block">Seguir eligiendo productos</a>
            </div>
            <div class="col-lg-6" id="centrar">
              <a href="{{ url('/subtotal') }}" class="btn btn-success btn-lg btn-block">Proceder a realizar la
                petición</a>
            </div>
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