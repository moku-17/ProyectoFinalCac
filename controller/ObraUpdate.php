<?php
$id_obra=$_POST["id_obra"];
$nombre=$_POST["nombre"];
$link=$_POST["link"];
$fecha=$_POST["fecha"];
$id_artista=$_POST["id_artista"];

require_once("../dao/ObraDAO.php");

$obraDAO = new ObraDAO();
$guardado = $obraDAO->actualizar_obra($id_obra, $nombre, $link, $fecha, $id_artista);

if ($guardado!=0) {
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
            alert("No actualizamos los datos de tu obra.");
            window.history.back();
    </script>
    <?php
    exit;
}
?>