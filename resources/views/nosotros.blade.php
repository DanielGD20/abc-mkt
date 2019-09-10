<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<!--Se incluyen las dependencias CSS-->
@include('util.header')

<body>

  <!--Aqui se incluye el header de video -->
  @include('util.videoHeader')
  <!--Fin del header-->

  <div class="site-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5 ml-auto order-lg-2 mb-5" data-aos="fade-up" data-aos-delay="200">
          <img src="{{ asset('images/img_2.jpg') }}" alt="Image" class="img-fluid">
        </div>
        <div class="col-lg-6 order-lg-1" data-aos="fade-up" data-aos-delay="100">
          <div class="site-section-heading text-left mb-5 w-border">
            <h2>Acerca de Nosotros</h2>
          </div>
          <p class="lead" align="justify">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate accusamus porro, iusto id
            iste, quo nulla. Quisquam quia reiciendis iste earum mollitia officiis pariatur, culpa ab rerum quam, sint
            veritatis?
          </p>
        </div>

      </div>
    </div>
  </div>

  <!---Se incluyen las dependencias y la firma-->
  @include('util.footer')

</body>

</html>