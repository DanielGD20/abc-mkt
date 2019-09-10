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

      <div class="row" style="margin-top: -5% !important">
        <div class="text-center mb-5 w-border col-md-8 mx-auto site-section-heading">
          <h2 class="mb-5">Eventos</h2>
          <h4>
            Conoce los proximos eventos que realizará el departamento
            <h4>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
          <a href="single.html"><img src="images/img_4.jpg" alt="Image" class="img-fluid"></a>
          <div class="p-4 bg-white">
            <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
            <h2 class="h5 text-black mb-3"><a href="single.html">This Is The Day, Party, Party!</a></h2>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="200">
          <a href="single.html"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
          <div class="p-4 bg-white">
            <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
            <h2 class="h5 text-black mb-3"><a href="single.html">This Is The Day, Party, Party!</a></h2>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="300">
          <a href="single.html"><img src="images/img_3.jpg" alt="Image" class="img-fluid"></a>
          <div class="p-4 bg-white">
            <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
            <h2 class="h5 text-black mb-3"><a href="single.html">This Is The Day, Party, Party!</a></h2>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
          <a href="single.html"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
          <div class="p-4 bg-white">
            <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
            <h2 class="h5 text-black mb-3"><a href="single.html">This Is The Day, Party, Party!</a></h2>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="200">
          <a href="single.html"><img src="images/img_3.jpg" alt="Image" class="img-fluid"></a>
          <div class="p-4 bg-white">
            <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
            <h2 class="h5 text-black mb-3"><a href="single.html">This Is The Day, Party, Party!</a></h2>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="300">
          <a href="single.html"><img src="images/img_4.jpg" alt="Image" class="img-fluid"></a>
          <div class="p-4 bg-white">
            <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
            <h2 class="h5 text-black mb-3"><a href="single.html">This Is The Day, Party, Party!</a></h2>
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