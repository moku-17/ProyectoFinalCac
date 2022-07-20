<?php
class ObraDAO {

    public function get_obra($id_obra, $id_artista) {
        require("../database/ConnDB.php");
        require_once("../model/Obra.php");
        require_once("../dao/ArtistaDAO.php");

        $sql = "SELECT * FROM obras WHERE id = '$id_obra'";
        $result = $conexionDB->ejecutar($sql);

        $artistaDAO = new ArtistaDAO();
        while ($row = $result->fetch_assoc()) {
            $artista = $artistaDAO->get_artista($id_artista);

            $obra = new Obra($row["id"], $row["nombre"], $row["link"], $row["fecha"], $artista);
        }

        return $obra;
    }

    public function guardar_obra($nombre, $link, $fecha, $id_artista) {
        require("../database/ConnDB.php");

        $sql = "INSERT INTO obras (id, nombre, link, fecha, id_artista) VALUES (NULL, '$nombre', '$link', '$fecha', '$id_artista')";
        $conexionDB->ejecutar($sql);

        return $conexionDB->contar_filas() > 0;
    }

    public function actualizar_obra($id_obra, $nombre, $link, $fecha, $id_artista) {
        require("../database/ConnDB.php");

        $sql = "UPDATE obras SET nombre = '$nombre', link = '$link', fecha = '$fecha', id_artista = '$id_artista' WHERE id ='$id_obra'";
        $conexionDB->ejecutar($sql);

        return $conexionDB->contar_filas() > 0;
    }

    public function eliminar_obra($id) {
        require("../database/ConnDB.php");

        $sql = "DELETE FROM obras WHERE id = '$id'";
        $conexionDB->ejecutar($sql);

        return $conexionDB->contar_filas() > 0;
    }

    public function listar_obras() {
        require("../database/ConnDB.php");
        require_once("../model/Obra.php");
        require_once("../dao/ArtistaDAO.php");

        $sql = "SELECT * FROM obras ORDER BY fecha DESC";
        $result = $conexionDB->ejecutar($sql);
        
        $artistaDAO = new ArtistaDAO();
        while ($row = $result->fetch_assoc()) {
            $artista = $artistaDAO->get_artista($row["id_artista"]);
            $obra = new Obra($row["id"], $row["nombre"], $row["link"], $row["fecha"], $artista);
            $obras[] = $obra;
        }

        return $obras;
    }

    public function listar_obras_por_artista($id) {
        require("../database/ConnDB.php");
        require_once("../model/Obra.php");
        require_once("../dao/ArtistaDAO.php");

        $sql = "SELECT * FROM obras WHERE id_artista = '$id'";
        $result = $conexionDB->ejecutar($sql);

        $artistaDAO = new ArtistaDAO();
        while ($row = $result->fetch_assoc()) {
            $artista = $artistaDAO->get_artista($id);
            $obra = new Obra($row["id"], $row["nombre"], $row["link"], $row["fecha"], $artista);
            $obras[] = $obra;
        }

        if (isset($obras)) return $obras;
    }
}
?>