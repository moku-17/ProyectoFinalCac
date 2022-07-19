<?php 
$id=$_GET["id"];

require_once("../dao/ArtistaDAO.php");

$artistaDAO = new ArtistaDAO();
$eliminado = $artistaDAO->eliminar_artista($id);

if ($eliminado) {
    session_start();
    session_destroy();
    ?>
    <script>
            alert("Eliminamos tu cuenta :(");
            window.location.href = "../view/inicio.php";
    </script>
    <?php
    exit;    
} else {
    ?>
    <script>
            alert("¡Atención! No eliminamos tu cuenta.");
            window.history.back();
    </script>
    <?php
    exit;
}
?>