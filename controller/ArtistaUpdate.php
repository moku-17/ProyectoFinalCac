<?php
$id=$_POST["id"];
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
$guardado = $artistaDAO->actualizar_artista($id, $user, $pass, $nombre, $email, $website, $foto, $id_tipo, $descripcion);

if ($guardado) {
    session_start();
    $_SESSION['artista'] = $guardado;
    ?>
    <script>
            alert("¡Actualización exitosa!");
            window.location.href = "../view/editor.php";
    </script>
    <?php
    exit;    
} else {
    ?>
    <script>
            alert("No fue posible actualizar los datos.");
            window.history.back();
    </script>
    <?php
    exit;
}
?>