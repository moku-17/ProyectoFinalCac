<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
$user = $_SESSION['artista'];
require_once("../dao/ArtistaDAO.php");
$artistaDAO = new ArtistaDAO;
$artista = $artistaDAO->get_artista_por_usuario($user);
$id_artista = $artista->get_id();
$id_tipo = $artista->get_id_tipo();
$categoria = $id_tipo;
$id_obra=$_GET['id_obra'];

echo $id_artista.' '.$id_obra;
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
                <h1><a href="editor.php">INDIES SHOWCASE de <?php echo $artista->get_nombre(); ?></a></h1>
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
                    <h2>Modificar obra</h2>
                    <p></p>
                </div>

                <div class="row">
                    <div class="col-lg-5 col-md-8">
                        <?php
                        require_once("../dao/ObraDAO.php");
                        require_once("../model/Obra.php");
                        $obraDAO = new ObraDAO();
                        $obra = $obraDAO->get_obra($id_obra, $id_artista);
                        if ($categoria == 1) echo '
                  <iframe width="600" height="400" src="https://www.youtube.com/embed/' . $obra->get_link() . '"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>';
                    if ($categoria == 2) echo '
                    <img src="' . $obra->get_link() . '" class="img-fluid" alt="">
                '; ?><p>&nbsp;</p>
                        <form action="../controller/ObraUpdate.php" method="post" role="form" class="form">
                            <h5>Datos sobre la obra</h5>
                            <input type="hidden" name="id_obra" value="<?php echo $id_obra; ?>">
                            <input type="hidden" name="id_artista" value="<?php echo $id_artista; ?>">
                            <div class="form-group mt-3">
                                <label for="nombre">Título de la obra</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Título de la obra" value="<?php echo $obra->get_nombre(); ?>" required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="link"><?php if ($id_tipo == 1) echo 'ID de video de YouTube (después de https://www.youtube.com/watch?v=)';
                                                                                                            elseif ($id_tipo == 2) echo 'URL de una imagen (completa, que empiece con https://)'; ?></label>
                                <input type="text" class="form-control" name="link" id="link" placeholder="<?php if ($id_tipo == 1) echo 'ID de video de YouTube (después de https://www.youtube.com/watch?v=)';
                                                                                                            elseif ($id_tipo == 2) echo 'URL de una imagen (completa, que empiece con https://)'; ?>" value="<?php echo $obra->get_link(); ?>" required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="fecha">Año de creación</label>
                                <input type="number" class="form-control" name="fecha" id="fecha" maxlength="4" min="1900" max="2022" placeholder="Año de creación" value="<?php echo $obra->get_fecha(); ?>" required>
                            </div>
                            <div class="text-center mt-3"><button type="submit">Modificar obra</button> <button type="button" class="btn" onclick="window.history.back();">Cancelar</button></div>
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