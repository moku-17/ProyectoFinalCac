<?php
class Artista {

    private $id;
    private $user;
    private $pass;
    private $nombre;
    private $email;
    private $website;
    private $foto;
    private $id_tipo;
    private $descripcion;

    function __construct($id, $user, $pass, $nombre, $email, $website, $foto, $id_tipo, $descripcion) {
        $this->id = $id;
        $this->user = $user;
        $this->pass = $pass;
        $this->nombre = $nombre;
        $this->email = $email;
        $this->website = $website;
        $this->foto = $foto;
        $this->id_tipo = $id_tipo;
        $this->descripcion = $descripcion;
    }

    public function get_id() {
        return $this->id;
    }
    public function set_id($id) {
        $this->id = $id;
    }
    public function get_user() {
        return $this->user;
    }
    public function set_user($user) {
        $this->user = $user;
    }
    public function get_pass() {
        return $this->pass;
    }
    public function set_pass($pass) {
        $this->pass = $pass;
    }
    public function get_nombre() {
        return $this->nombre;
    }
    public function set_nombre($nombre) {
        $this->nombre = $nombre;
    }
    public function get_email() {
        return $this->email;
    }
    public function set_email($email) {
        $this->email = $email;
    }
    public function get_website() {
        return $this->website;
    }
    public function set_website($website) {
        $this->website = $website;
    }
    public function get_foto() {
        return $this->foto;
    }
    public function set_foto($foto) {
        $this->foto = $foto;
    }
    public function get_id_tipo() {
        return $this->id_tipo;
    }
    public function set_id_tipo($id_tipo) {
        $this->id_tipo = $id_tipo;
    }
    public function get_descripcion() {
        return $this->descripcion;
    }
    public function set_descripcion($descripcion) {
        $this->descripcion = $descripcion;
    }
}
?>