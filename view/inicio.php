<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Indies Showcase | Un lugar para tu arte</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:300,400,400i,600,700|Special+Elite:400|Bebas+Neue:400" rel="stylesheet">

  <!-- CSS Files -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column align-items-center justify-content-center">
    <div class="opacitor">
      <h1>Indies Showcase!</h1>
      <h2>Una pasarela para artistas independientes</h2>
      <a href="#about" class="btn-get-started scrollto"><i class="fa fa-chevron-circle-down"></i></a>
    </div>
  </section><!-- End Hero -->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="inicio.php">INDIES SHOWCASE</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Proyecto</a></li>
          <li><a class="nav-link scrollto" href="#artists">Artistas</a></li>
          <li><a class="nav-link scrollto" href="#showcase">Pasarela</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contacto</a></li>
          <li class="dropdown"><button type="button" class="btn btn-warning btn-sm ms-3" data-toggle="modal" data-target="#ingresarModal">
              Soy indie <i class="fa fa-chevron-down"></i>
            </button>
            <ul>
              <li>
                <a type="button" class="nav-link" data-toggle="modal" data-target="#ingresarModal">
                  Ingresar
                </a>
              </li>
              <li><a class="nav-link" href="registro.php">Registrarse</a></li>
            </ul>
          </li>
        </ul>
        <i class="fa fa-bars mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
          <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
            <div class="content d-flex flex-column justify-content-center">
              <h3>Acerca del proyecto Indies Showcase</h3>
              <p>
                Queremos ofrecer un espacio para que los artistas independientes puedan exhibir su arte y para que el público pueda descubrir nuevos aires artísticos.
              </p>
              <div class="card mt-3 mb-3 bg-warning">
                <div class="card-body">
                    Esta página cuenta con:
                  <ul class="list">
                    <li>un listado de usuarios/artistas (sección <strong>Artistas</strong>)</li>
                    <li>un listado de obras (sección <strong>Pasarela</strong>)</li>
                    <li>un inicio de sesión y alta de usuario (botón <strong>Soy Indie</strong>)</li>
                    <li>un <strong>CRUD</strong> de obras en la sesión de usuario/artista</li>
                  </ul>
                </div>
              </div>
              <p>(Nota: los artistas que figuran aquí no son necesariamente independientes... fueron colocados a modo de lorem ipsum.)
              </p>
              <br>
              <div class="row">
                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="fa fa-users"></i>
                    <span data-purecounter-start="0" data-purecounter-end="12956" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Usuarios satisfechos</strong> consequuntur voluptas nostrum aliquid ipsam architecto ut.
                    </p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="fa-solid fa-masks-theater"></i>
                    <span data-purecounter-start="0" data-purecounter-end="357" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Artistas promocionados</strong> adipisci atque cum quia aspernatur totam laudantium et
                      quia dere tan
                    </p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="fa fa-images"></i>
                    <span data-purecounter-start="0" data-purecounter-end="1248" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Obras presentadas</strong> aut commodi quaerat modi aliquam nam ducimus aut voluptate
                      non vel</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="fa fa-award"></i>
                    <span data-purecounter-start="0" data-purecounter-end="153" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Proyectos concretados</strong> rerum asperiores dolor alias quo reprehenderit eum et nemo
                      pad der</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Artists Section ======= -->
    <section id="artists" class="artists section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Artistas</h2>
          <p>Conocé a los artistas independientes que dan vida al talento de hoy.</p>
        </div>

        <div class="row">
          <?php
          require_once("../dao/ArtistaDAO.php");
          require_once("../model/Artista.php");
          $artistaDAO = new ArtistaDAO();
          $artistas = $artistaDAO->listar_artistas();
          //var_dump($artistas);

          foreach ($artistas as $artista) {
            // var_dump($artista);
            $categoria = $artista->get_id_tipo();
            echo '
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-3">
          <div class="icon-box">
            <div class="card-artista" style="background-image: url(' . $artista->get_foto() . ');"></div>
            <h3 class="title"><a href="' . $artista->get_website() . '">' . $artista->get_nombre() . '</a></h3>
            <div class="icon">';
            if ($categoria == 1) echo '<i class="fa-solid fa-music"></i>';
            if ($categoria == 2) echo '<i class="fa-solid fa-image"></i>';
            if ($categoria == 3) echo '<i class="fa-solid fa-pen-fancy"></i>';
            echo '</div> 
            <p class="description">' . $artista->get_descripcion() . '</p>
            
            <a href="' . $artista->get_website() . '" class="btn btn-warning btn-sm mt-3" target="_blank">
              + Info</a>
          </div>
        </div>
        ';
          }
          ?>
        </div>
      </div>
    </section><!-- End Artists Section -->

    <!-- ======= Showcase Section ======= -->
    <section id="showcase" class="showcase section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Pasarela</h2>
          <p>Elegí el artista para ver sus obras. ¡O descubrí una obra nueva con un click al azar!</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="showcase-filters">
              <li data-filter="*" class="filter-active">Todos</li>
              <?php
              foreach ($artistas as $artista) {
                $categoria = $artista->get_id_tipo();
                if ($categoria != 3)
                  echo '
          <li data-filter=".filter-' . $artista->get_id() . '">' . $artista->get_nombre() . '</li>
        ';
              }
              ?>
            </ul>
          </div>
        </div>

        <div class="row showcase-container">

          <?php
          require_once("../dao/ObraDAO.php");
          require_once("../model/Obra.php");
          $obraDAO = new ObraDAO();
          $obras = $obraDAO->listar_obras();

          foreach ($obras as $obra) {
            $categoria = $obra->get_artista()->get_id_tipo();
            echo '
          <div class="col-lg-4 col-md-6 showcase-item filter-' . $obra->get_artista()->get_id() . '">
            <div class="showcase-wrap">';
            if ($categoria == 1) echo '
              <iframe width="500" height="275" src="https://www.youtube.com/embed/' . $obra->get_link() . '"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>';
            if ($categoria == 2) echo '
                <img src="' . $obra->get_link() . '" class="img-fluid" alt="">
            ';
            echo '
              <div class="showcase-info">
                <h4>' . $obra->get_nombre() . ' (' . $obra->get_fecha() . ')</h4>
                <p>' . $obra->get_artista()->get_nombre() . '</p>
              </div>
              <div class="showcase-links">
                <a href="';
            if ($categoria == 1) echo 'https://youtu.be/';
            echo $obra->get_link() . '" data-gallery="showcaseGallery" class="showcase-lightbox"
                  title="' . $obra->get_nombre() . ' | ' . $obra->get_artista()->get_nombre() . '"><i class="fa fa-expand"></i></a>
                <a href="' . $obra->get_artista()->get_website() . '" title="Website" target="_blank"><i class="fa fa-globe"></i></a>
              </div>
            </div>
          </div>
        ';
          }
          ?>

        </div><!-- End Showcase Section -->

        <!-- ======= Testimonials Section ======= -->
        <div id="testimonials" class="testimonials">

          <h2>Expresión literaria</h2>
          <p>Encontrate con una literatura nueva y refrescante. Poetas, novelistas y cuentistas de una nueva generación: los próximos clásicos y best-sellers. Este segmento está a modo ilustrativo.</p>

          <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p>
                    <i class="fa-solid fa-quote-left quote-icon-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                    Accusantium
                    quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                    <i class="fa-solid fa-quote-right quote-icon-right"></i>
                  </p>
                  <img src="img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>El perro de San Roque</h4>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p>
                    <i class="fa-solid fa-quote-left quote-icon-left"></i>
                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis
                    quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    <i class="fa-solid fa-quote-right quote-icon-right"></i>
                  </p>
                  <img src="img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Cynthia Matayoshi</h3>
                  <h4>La sombra de las ballenas</h4>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p>
                    <i class="fa-solid fa-quote-left quote-icon-left"></i>
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim
                    tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                    <i class="fa-solid fa-quote-right quote-icon-right"></i>
                  </p>
                  <img src="img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Flores de acero</h4>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p>
                    <i class="fa-solid fa-quote-left quote-icon-left"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit
                    minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                    <i class="fa-solid fa-quote-right quote-icon-right"></i>
                  </p>
                  <img src="img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Luna azul</h4>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p>
                    <i class="fa-solid fa-quote-left quote-icon-left"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim
                    culpa
                    labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                    <i class="fa-solid fa-quote-right quote-icon-right"></i>
                  </p>
                  <img src="img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Cuando cantan los canarios</h4>
                </div>
              </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
          </div>

        </div>
      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Contacto</h2>
          <p>El formulario de contacto está desactivado</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-4">
            <div class="contact-about">
              <h3>#IndiesShowcase</h3>
              <p>Apoyá este proyecto también en redes sociales.</p>
              <div class="social-links">
                <a href="#" class="twitter"><i class="fa-brands fa-twitter"></i></a>
                <a href="#" class="facebook"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" class="instagram"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" class="linkedin"><i class="fa-brands fa-linkedin-in"></i></a>
              </div>
              <p><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#ingresarModal">
                  Soy indie
                </button></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
          </div>

          <div class="col-lg-5 col-md-8">
            <form action="contact.php" method="post" role="form" class="form">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Tu nombre" required>
              </div>
              <div class="form-group mt-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Tu email" required>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Mensaje" required></textarea>
              </div>
              <div class="text-center mt-3"><button type="submit">Enviar mensaje</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- Modal -->
  <div class="modal fade" id="ingresarModal" tabindex="-1" role="dialog" aria-labelledby="ingresarModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ingresarModalLabel">¿Sos indie?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <h3>Ingresá con tu usuario y contraseña registrados para editar tus datos y obras.</h3>
          <form action="../controller/login.php" method="post" role="form" class="form">
            <div class="form-group mt-3">
              <input type="text" name="user" class="form-control" id="user" placeholder="Usuario" required>
            </div>
            <div class="form-group mt-3">
              <input type="password" name="pass" class="form-control" id="pass" placeholder="Contraseña" required>
            </div>
            <div class="text-center"><button type="submit">Ingresar</button></div>
          </form>
          <p>
            ¿Todavía no estás registrado? <a href="registro.php">Registrate aquí.</a>
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>CAC</span></strong>. Todos los derechos reservados.
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-html-bootstrap-template-lonely/ -->
        Template diseñado por <a href="https://bootstrapmade.com/">BootstrapMade</a>
        y editado por <a href="https://moku.com.ar/">MOKU</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="fa fa-chevron-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="vendor/purecounter/purecounter.js"></script>
  <script src="vendor/glightbox/js/glightbox.min.js"></script>
  <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="vendor/swiper/swiper-bundle.min.js"></script>
  <script src="vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>

</body>

</html>