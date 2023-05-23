<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>EstateAgency Bootstrap Template - About</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: EstateAgency - v4.9.0
  * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  

  <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand"  href="{{ url('/index')}}">UE<span class="color-b">DE</span></a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">

        <li class="nav-item">
            <a class="nav-link active" href="{{ url('/index')}}">Inicio</a>
          </li>
      
        <li class="nav-item">
            <a class="nav-link " href="{{ url('/contact')}}">Contactenos</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="{{ url('/nosotros')}}">Nosotros</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="{{ url('/servi')}}">Servicios</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="{{ url('/even')}}">Eventos</a>
          </li>
         

        </ul>
      </div>

     

    </div>
  </nav><!-- End Header/Navbar -->

  <main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
        
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Inicio</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Eventos
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= About Section ======= -->
    <section class="section-about">
      <div class="container">
      @foreach($eventos  as  $evento)
        <div class="row">
       
          <div class="col-sm-25 position-relative">
            <div class="about-img-box">
                                                          
               <img src="{{ asset('storage').'/'.$evento->foto }}" class="img-fluid">                                      
                         
              <img src="assets/img/slide-about-1.jpg" alt="" class="img-fluid">
            </div>
            
          </div>
          
        @endforeach 
        </div>
      </div>
    </section>









  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 

  <!-- ======= Footer ======= -->
  <section class="section-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">UEDE</h3>
            </div>
            <div class="w-body-a">
              <p class="w-text-a color-text-a">
                Bienvenidos a la Unidad de Emprendimiento
              </p>
            </div>
            <div class="w-footer-a">
              <ul class="list-unstyled">
                <li class="color-a">
                  <span class="color-text-a">Correo.</span> unidaddeemprendimiento@unicesar.edu.co  <br> emprendimientoupecista2023@gmail.com
                </li>
                <li class="color-a">
                  <span class="color-text-a">Telefono .</span> 3006727983
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Emprendimiento</h3>
            </div>
            <div class="w-body-a">
              <div class="w-body-a">
                <ul class="list-unstyled">
                  <li class="item-list-a">
                  <li  class="nav-item">
                <a class="nav-link " href="{{ url('/login')}}" target="_blank" >Entrar</a>
                </li>
                
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="{{ url('/nosotros')}}">Conoce Nuestros Emprendimientos</a>
                  </li>
                

                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Sitios </h3>
            </div>
            <div class="w-body-a">
              <ul class="list-unstyled">
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="https://www.unicesar.edu.co/index.php/es/" target="_blank">Ir a UPC</a><br>

                  <i class="bi bi-chevron-right"></i> <a href="https://www.instagram.com/upcemprendimiento/" target="_blank">Ir a instagram</a><br>

                  <i class="bi bi-chevron-right"></i> <a href="https://www.facebook.com/profile.php?id=100010591682639" target="_blank">Ir a facebook</a><br>

                  <i class="bi bi-chevron-right"></i> <a href="https://twitter.com/Emprender_upc" target="_blank">Ir a twitter</a>
                </li>
 
            
               
                
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          
       
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              &copy; Programado por
              <span class="color-a">Jose Ivan Ortiz Peña</span> 
            </p>
          </div>
          <div class="credits">
       
            Ingeniero <a href="#">De Sistemas</a>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>