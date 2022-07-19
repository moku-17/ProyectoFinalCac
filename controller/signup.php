<?php
$user=$_POST["user"];
$pass=$_POST["pass"];
$nombre=$_POST["nombre"];
$email=$_POST["email"];
$website=$_POST["website"];
$foto=$_POST["foto"];
$id_tipo=$_POST["id_tipo"];
$descripcion=$_POST["descripcion"];

require_once("../dao/ArtistaDAO.php");

$artistaDAO = new ArtistaDAO();
$guardado = $artistaDAO->guardar_artista($user, $pass, $nombre, $email, $website, $foto, $id_tipo, $descripcion);

if ($guardado) {
    session_start();
    $_SESSION['artista'] = $guardado;
    ?>
    <script>
            alert("¡Registro exitoso! Ya sos parte de Indies Showcase.");
            window.location.href = "../view/editor.php";
    </script>
    <?php
    exit;    
} else {
    ?>
    <script>
            alert("No se pudo realizar el registro.");
            window.history.back();
    </script>
    <?php
    exit;
}
?>