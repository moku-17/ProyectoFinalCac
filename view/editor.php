<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
$user = $_SESSION['artista'];
require_once("../dao/ArtistaDAO.php");
$artistaDAO = new ArtistaDAO;
$artista = $artistaDAO->get_artista_por_usuario($user);
$id_artista = $artista->get_id();
$id_tipo = $artista->get_id_tipo();
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

  <script>
    function eliminarCuenta() {
      confirm("¿Estás completamente seguro de eliminar esta cuenta?");
    }

    function eliminarObra() {
      confirm("¿Estás completamente seguro de eliminar esta obra?");
    }
  </script>

</head>

<body>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column align-items-center justify-content-center" style="background-image: url('<?php echo $artista->get_foto(); ?>');">
    <div class="opacitor">
      <h1>¡Hola, <?php echo $artista->get_nombre(); ?>!</h1>
      <h2>Estás en tu pasarela :)</h2>
      <a href="#showcase" class="btn-get-started scrollto"><i class="fa fa-chevron-circle-down"></i></a>
    </div>
  </section><!-- End Hero -->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="">INDIES SHOWCASE de <?php echo $artista->get_nombre(); ?></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link" data-toggle="modal" data-target="#actualizarUsuarioModal">Modificar datos</a></li>
          <li><a class="nav-link" onclick="eliminarCuenta()" href="../controller/ArtistaDelete.php?id=<?php echo $artista->get_id(); ?>">Eliminar cuenta</a></li>
          <li><button type="button" class="btn btn-warning btn-sm ms-3" onclick="location = '../controller/logout.php'">Cerrar sesión</button>
          </li>
        </ul>
        <i class="fa fa-bars mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Showcase Section ======= -->
    <section id="showcase" class="showcase section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Tu pasarela</h2>
          <p>Aquí podés agregar, modificar o eliminar obras de tu pasarela.</p>
          <br>
          <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#agregarObraModal">
            <i class="fa fa-plus"></i> Agregar obra
          </button>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <table class="table">
              <thead>
                <tr>
                  <th>Vista previa</th>
                  <th>Título de la obra</th>
                  <th>Id de YouTube / URL de imagen</th>
                  <th>Año de creación</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php
                require_once("../dao/ObraDAO.php");
                require_once("../model/Obra.php");
                $obraDAO = new ObraDAO();
                $obras = $obraDAO->listar_obras_por_artista($id_artista);

                if (isset($obras)) {

                  foreach ($obras as $obra) {
                    $categoria = $obra->get_artista()->get_id_tipo();
                    echo '
              <tr>
                <td>';
                    if ($categoria == 1) echo '
                  <iframe width="300" height="100" src="https://www.youtube.com/embed/' . $obra->get_link() . '"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>';
                    if ($categoria == 2) echo '
                    <img src="' . $obra->get_link() . '" class="img-fluid" alt="">
                ';
                    echo '
                </td>
                <td>' . $obra->get_nombre() . '</td>
                <td>' . $obra->get_link() . '</td>
                <td>' . $obra->get_fecha() . '</td>
                <td><a class="text-success" href="../view/modificar.php?id_obra=' . $obra->get_id_obra() . '"><i class="fa fa-edit fa-lg"></i></a>&nbsp;<a class="text-danger" onclick="eliminarObra()" href="../controller/ObraDelete.php?id=' . $obra->get_id_obra() . '"><i class="fa fa-trash-can fa-lg"></i></a></td>
              </tr>
               ';
                  }
                } else {
                  echo '
                  <tr>
                  <td colspan="5">
                  <p>No hay contenido para mostrar. ¡Agregá una obra!</p>
                  </td>
                  </tr>
                  ';
                }
                ?>
              </tbody>
            </table>
          </div>
        </div><!-- End Showcase Section -->
        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#agregarObraModal">
          <i class="fa fa-plus"></i> Agregar obra
        </button>
  </main><!-- End #main -->

  <!-- Modal Actualizar artista-->
  <div class="modal fade" id="actualizarUsuarioModal" tabindex="-1" role="dialog" aria-labelledby="actualizarUsuarioModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="actualizarUsuarioModalLabel">Modificar datos de <?php echo $artista->get_user(); ?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?php
          require_once("../dao/ArtistaDAO.php");
          require_once("../model/Artista.php");
          $artistaDAO = new ArtistaDAO();
          $artista = $artistaDAO->get_artista($id_artista); ?>
          <form action="../controller/ArtistaUpdate.php" method="post" role="form" class="form was-validated" novalidate>
            <input type="hidden" name="id" value="<?php echo $id_artista; ?>">
            <input type="hidden" name="user" value="<?php echo $artista->get_user(); ?>">
            <h5>Datos acerca de <?php echo $artista->get_nombre(); ?></h5>
            <p><small>Categoría artística:</small></p>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="id_tipo" id="musica" value="1" <?php if ($artista->get_id_tipo() == 1) echo "checked"; ?>>
              <label class="form-check-label" for="musica">Música</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="id_tipo" id="visual" value="2" <?php if ($artista->get_id_tipo() == 2) echo "checked"; ?>>
              <label class="form-check-label" for="visual">Artes visuales</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="id_tipo" id="letras" value="3" <?php if ($artista->get_id_tipo() == 3) echo "checked"; ?>>
              <label class="form-check-label" for="letras">Literatura</label>
            </div>
            <div class="form-group mt-3">
              <label for="nombre">Nombre del artista</label>
              <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del artista" value="<?php echo $artista->get_nombre(); ?>" required>
              <div class="invalid-feedback">Debe ingresar el nombre del artista o grupo</div>
            </div>
            <div class="form-group mt-3">
              <label for="website">Link a más info (URL que empiece con http://)</label>
              <input type="text" class="form-control" name="website" id="website" placeholder="Link a más info (URL completa)" value="<?php echo $artista->get_website(); ?>" required pattern="https?://.+" title="Incluir http://">
              <div class="invalid-feedback">Debe incluir http:// o https://</div>
            </div>
            <div class="form-group mt-3">
              <label for="foto">Link a una foto (URL que empiece con http://)</label>
              <input type="text" class="form-control" name="foto" id="foto" placeholder="Link a una foto (URL completa)" value="<?php echo $artista->get_foto(); ?>" required pattern="https?://.+" title="Incluir http://">
              <div class="invalid-feedback">Debe incluir http:// o https://</div>
            </div>
            <div class="form-group mt-3">
              <label for="descripcion">Una breve descripción sobre sobre el artista (hasta 400 caracteres)</label>
              <textarea class="form-control" name="descripcion" id="descripcion" rows="5" maxlength="400" placeholder="Una breve descripción sobre sobre el artista (hasta 400 caracteres)" required><?php echo $artista->get_descripcion(); ?></textarea>
              <div class="invalid-feedback">Debe ingresar una breve descripción de hasta 400 caracteres</div>
            </div>
            <br>
            <h5>Datos para ingresar a tu cuenta</h5>
            <div class="form-group mt-3">
              <label for="user">Tu nombre de usuario (no se puede modificar)</label>
              <input type="text" class="form-control" name="" id="user" placeholder="Tu nombre de usuario (no se puede modificar)" value="<?php echo $artista->get_user(); ?>" disabled>
            </div>
            <div class="form-group mt-3">
              <label for="email">Tu email</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Tu email" value="<?php echo $artista->get_email(); ?>" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Ingresar un email válido">
              <div class="invalid-feedback">Debe ingresar un email válido</div>
              <div class="messages"></div>
            </div>
            <div class="form-group mt-3">
              <label for="pass">Ingresá tu contraseña o una nueva contraseña</label>
              <input type="password" class="form-control" name="pass" id="pass" placeholder="Ingresá tu contraseña o una nueva contraseña" value="<?php echo $artista->get_pass(); ?>" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Debe contener al menos un número, una mayúscula y una minúscula, y al menos 8 caracteres">
              <div class="invalid-feedback">Debe contener al menos un número, una mayúscula y una minúscula, y al menos 8 caracteres</div>
              <div class="messages"></div>
            </div>
            <br>
            <div class="text-center mt-3"><button type="submit">Modificar datos</button> <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">Cancelar</button></div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Agregar obra-->
  <div class="modal fade" id="agregarObraModal" tabindex="-1" role="dialog" aria-labelledby="agregarObraModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="agregarObraModalLabel">Agregar obra de <?php echo $artista->get_nombre(); ?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="../controller/ObraUpload.php" method="post" role="form" class="form">
            <h5>Datos sobre la obra</h5>
            <input type="hidden" name="id_artista" value="<?php echo $id_artista; ?>">
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Título de la obra" required>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="link" id="link" placeholder="<?php if ($id_tipo == 1) echo 'ID de video de YouTube (después de https://www.youtube.com/watch?v=)';
                                                                                          elseif ($id_tipo == 2) echo 'URL de una imagen (completa, que empiece con https://)'; ?>" required>
            </div>
            <div class="form-group mt-3">
              <input type="number" class="form-control" name="fecha" id="fecha" maxlength="4" min="1900" max="2022" placeholder="Año de creación" required>
            </div>
            <div class="text-center mt-3"><button type="submit">Enviar obra</button></div>
          </form>
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
        y rediseñado por <a href="https://moku.com.ar/">MOKU</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="fa fa-chevron-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>

</body>

</html>