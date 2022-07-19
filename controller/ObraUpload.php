<?php
$nombre=$_POST["nombre"];
$link=$_POST["link"];
$fecha=$_POST["fecha"];
$id_artista=$_POST["id_artista"];

require_once("../dao/ObraDAO.php");

$obraDAO = new ObraDAO();
$guardado = $obraDAO->guardar_obra($nombre, $link, $fecha, $id_artista);

if ($guardado) {
    ?>
    <script>
            alert("¡Perfecto! Tu obra ya está en Indies Showcase.");
            window.location.href = "../view/editor.php";
    </script>
    <?php
    exit;    
} else {
    ?>
    <script>
            alert("No se pudo agregar la obra.");
            window.history.back();
    </script>
    <?php
    exit;
}
?>