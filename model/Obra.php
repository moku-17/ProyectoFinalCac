<?php
class Obra {

    private $id_obra;
    private $nombre;
    private $link;
    private $fecha;
    private Artista $artista;

    function __construct($id_obra, $nombre, $link, $fecha, Artista $artista) {
        $this->id_obra = $id_obra;
        $this->nombre = $nombre;
        $this->link = $link;
        $this->fecha = $fecha;
        $this->artista = $artista;
    }

    public function get_id_obra() {
        return $this->id_obra;
    }
    public function set_id_obra($id_obra) {
        $this->id_obra = $id_obra;
    }
    public function get_nombre() {
        return $this->nombre;
    }
    public function set_nombre($nombre) {
        $this->nombre = $nombre;
    }
    public function get_link() {
        return $this->link;
    }
    public function set_link($link) {
        $this->link = $link;
    }
    public function get_fecha() {
        return $this->fecha;
    }
    public function set_fecha($fecha) {
        $this->fecha = $fecha;
    }
    public function get_artista() {
        return $this->artista;
    }
    public function set_artista($artista) {
        $this->artista = $artista;
    }
}