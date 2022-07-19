<?php
class ArtistaDAO {

    public function validar_acceso($user, $pass) {
        require("../database/ConnDB.php");

        $sql = "SELECT * FROM artistas WHERE user = '$user' AND pass ='$pass'";
        $result = $conexionDB->ejecutar($sql);

        $existenUserPass = $conexionDB->contar_filas() > 0;

        if ($existenUserPass) {
            require_once("../model/Artista.php");
            while ($row = $result->fetch_assoc()) {
                $user = $row["user"];        
            }

            return $user;
        } else {

            return false;
        }
    }

    public function get_artista($id) {
        require("../database/ConnDB.php");
        require_once("../model/Artista.php");

        $sql = "SELECT * FROM artistas WHERE id = '$id'";
        $result = $conexionDB->ejecutar($sql);

        while ($row = $result->fetch_assoc()) {
            $artista = new Artista($row["id"], $row["user"], $row["pass"], $row["nombre"], $row["email"], $row["website"], $row["foto"], $row["id_tipo"], $row["descripcion"]);        
        }

        return $artista;
    }

    public function get_artista_por_usuario($user) {
        require("../database/ConnDB.php");
        require_once("../model/Artista.php");

        $sql = "SELECT * FROM artistas WHERE user = '$user'";
        $result = $conexionDB->ejecutar($sql);

        while ($row = $result->fetch_assoc()) {
            $artista = new Artista($row["id"], $row["user"], $row["pass"], $row["nombre"], $row["email"], $row["website"], $row["foto"], $row["id_tipo"], $row["descripcion"]);        
        }

        return $artista;
    }

    public function guardar_artista($user, $pass, $nombre, $email, $website, $foto, $id_tipo, $descripcion) {
        require("../database/ConnDB.php");

        $sql = "INSERT INTO artistas (id, user, pass, nombre, email, website, foto, id_tipo, descripcion) VALUES (NULL, '$user', '$pass', '$nombre', '$email', '$website', '$foto', '$id_tipo', '$descripcion')";
        $conexionDB->ejecutar($sql);

        if ($conexionDB->contar_filas() > 0)
        return $user;
        else return 0;
    }

    public function actualizar_artista($id, $user, $pass, $nombre, $email, $website, $foto, $id_tipo, $descripcion) {
        require("../database/ConnDB.php");

        $sql = "UPDATE artistas SET user = '$user', pass = '$pass', nombre = '$nombre', email = '$email', website = '$website', foto = '$foto', id_tipo = '$id_tipo', descripcion = '$descripcion' WHERE id = '$id'";
        $conexionDB->ejecutar($sql);

        if ($conexionDB->contar_filas() > 0)
        return $user;
        else return 0;
    }

    public function eliminar_artista($id) {
        require("../database/ConnDB.php");

        $sql = "DELETE FROM artistas WHERE id = '$id'";
        $conexionDB->ejecutar($sql);

        return $conexionDB->contar_filas() > 0;
    }

    public function listar_artistas() {
        require("../database/ConnDB.php");
        require_once("../model/Artista.php");

        $sql = "SELECT * FROM artistas ORDER BY nombre";
        $result = $conexionDB->ejecutar($sql);

        while ($row = $result->fetch_assoc()) {
            $artista = new Artista($row["id"], "", "", $row["nombre"], $row["email"], $row["website"], $row["foto"], $row["id_tipo"], $row["descripcion"]);
            $artistas[] = $artista;
        }

        return $artistas;
    }
}
?>