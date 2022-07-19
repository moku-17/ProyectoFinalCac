<?php 
$id=$_GET["id"];

require_once("../dao/obraDAO.php");

$obraDAO = new ObraDAO();
$eliminado = $obraDAO->eliminar_obra($id);

if ($eliminado) {
    ?>
    <script>
            alert("Eliminamos la obra seleccionada.");
            window.location.href = "../view/editor.php";
    </script>
    <?php
    exit;    
} else {
    ?>
    <script>
            alert("¡Atención! No eliminamos la obra.");
            window.history.back();
    </script>
    <?php
    exit;
}
?>