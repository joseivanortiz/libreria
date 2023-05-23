<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>UEDE-Servicios</title>
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
  * Template Name: EstateAgency - v4.8.0
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
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Nuestros Servicios</h1>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Inicio</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Servicios
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

            
    <section class="section-about">
      <div class="container">
        <div class="row">
        @foreach($servicios  as $s)
          <div class="col-md-10 section-t8 position-relative">
            <div class="row">
              <div class="col-md-4 col-lg-5">
              <img src="assets/img/servicios.png" alt="" class="img-fluid" width="600"">
              </div>
             
              <div class="col-md-6 col-lg-5 section-md-t3">
                <div class="title-box-d">
                  <h3 class="title-d">{{$s->titulo}}</h3>
                </div>
                <p class="color-text-a">{{$s->texto}}</p>
                
              </div>
            </div>
          </div>
          @endforeach 
        </div>
      </div>
    </section>
  
<br><br><br><br>
   
    <div class="container">
    <div class="row">
     
     <div class="col-md-5">
       <div class="card-box-c foo">
         <div class="card-header-c d-flex">
           <div class="card-box-ico">
             <span class="bi bi-calendar4-week"></span>
           </div>
           <div class="card-title-c align-self-center">
             <h2 class="title-a">Beneficios</h2>
           </div>
         </div>
         <div class="card-body-c">
           <p class="content-c">
          
            <hr class="style1">
            <h5 align="left"> - Charlas, Eventos, Ferias Empresariales que fomentan el espíritu emprendedor.</h5>
            <h5 align="left"> - Asesorías para la formulación, desarrollo de ideas de negocio y construcción de modelos de negocio. </h5>
            <h5 align="left"> - Asesorías y acompañamientos en convocatorias de fuentes de financiación. </h5>
            <h5 align="left"> - Formación y capacitación en habilidades emprendedoras.</h5>
            <h5 align="left"> - Mentorías para la creación de nuevas empresas. </h5>
            <h5 align="left"> - Brindamos espacios de relacionamiento para los emprendedores. </h5>

         </div>
        
       </div>
     </div>
     <div class="col-md-5">
       <div class="card-box-c foo">
         <div class="card-header-c d-flex">
           <div class="card-box-ico">
             <span class="bi bi-card-checklist"></span>
           </div>
           <div class="card-title-c align-self-center">
             <h2 class="title-a"> Dirigido a </h2>
           </div>

         </div>
         <div class="card-body-c">
           <p class="content-c">
           <hr class="style1">
            <h5 align="left"> - Estudiantes emprendedores</h5>
            <h5 align="left"> - Egresados emprendedores </h5>
            <h5 align="left"> - Mipymes medianas y grandes empresas </h5>
           </p>
         </div>
       
       </div>
     </div>
   </div>
   </div> 
 






  </main><!-- End #main -->


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