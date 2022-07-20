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

    <!-- Template Main CSS File -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1><a href="inicio.php">INDIES SHOWCASE</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Registrate</h2>
                    <p></p>
                </div>

                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <form action="../controller/signup.php" method="post" role="form" class="form was-validated" novalidate>
                            <h5>Datos para ingresar a tu cuenta</h5>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="user" id="user" placeholder="Un nombre de usuario (no se podrá modificar)" required pattern="[A-Za-z].{3,}" title="Debe contener sólo letras y al menos 4 caracteres">
                                <div class="invalid-feedback">Debe contener sólo letras y al menos 4 caracteres</div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="password" class="form-control" name="pass" id="pass" placeholder="Una contraseña" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Debe contener al menos un número, una mayúscula y una minúscula, y al menos 8 caracteres">
                                <div class="invalid-feedback">Debe contener al menos un número, una mayúscula y una minúscula, y al menos 8 caracteres</div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Tu email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Ingresar un email válido">
                                <div class="invalid-feedback">Debe ingresar un email válido</div>
                            </div>
                            <br>
                            <h5>Datos acerca de vos o tu grupo</h5>
                            <p><small>Elegí una categoría artística:</small></p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="id_tipo" id="musica" value="1" required>
                                <label class="form-check-label" for="musica">Música</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="id_tipo" id="visual" value="2" required>
                                <label class="form-check-label" for="visual">Artes visuales</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="id_tipo" id="letras" value="3" required>
                                <label class="form-check-label" for="letras">Literatura</label>
                                <div class="invalid-feedback">Debe seleccionar una categoría</div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del artista" required title="Completar el nombre del artista o grupo">
                                <div class="invalid-feedback">Debe ingresar el nombre del artista o grupo</div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="website" id="website" placeholder="Link a más info (URL completa)" required pattern="https?://.+" title="Incluir http://">
                                <div class="invalid-feedback">Debe incluir http:// o https://</div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="foto" id="foto" placeholder="Link a una foto (URL completa)" required pattern="https?://.+" title="Incluir http://">
                                <div class="invalid-feedback">Debe incluir http:// o https://</div>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="descripcion" id="descripcion" rows="5" maxlength="400" placeholder="Una breve descripción sobre sobre el artista (hasta 400 caracteres)" required></textarea>
                                <div class="invalid-feedback">Debe ingresar una breve descripción de hasta 400 caracteres</div>
                            </div>
                            <div class="text-center mt-3"><button type="submit">Enviar datos</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>

    <!-- Template Main JS File -->
    <script src="js/main.js"></script>

</body>

</html>