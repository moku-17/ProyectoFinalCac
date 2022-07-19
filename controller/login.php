<?php 
$user=$_POST["user"];
$pass=$_POST["pass"];

require_once("../dao/ArtistaDAO.php");

$artistaDAO = new ArtistaDAO();
$accesoValido = $artistaDAO->validar_acceso($user, $pass);

if ($accesoValido) {
    session_start();
    $_SESSION['artista'] = $accesoValido;
    header("Location: ../view/editor.php");
    exit;
} else {
    ?>
    <script>
            alert("Usuario o password incorrecto.");
            window.history.back();
    </script>
    <?php
    exit;
}
?>