<?php

class Database
{
    private $host; // ip o nombre del server
    private $user; // usuario
    private $pass; // contraseña
    private $db; // nombre de base de datos
    private $conn;

    /**
     * Crea un objeto de la clase Database.
     */
    function __construct($host,$user,$pass,$db)
    {
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->db = $db;
    }

    /**
     * Conecta con la base de datos. 
     */
    public function conectar()
    {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db)
            or die("Error de conexión: (" . $this->conn->connect_error . ")" . $this->conn->connect_errno);
    }
    /**
     * Cierra la conexión.
     */
    public function cerrar()
    {
        $this->conn->close();
    }
    /**
     * Ejecuta una solicitud.
     */
    public function ejecutar($sql)
    {
        return $this->conn->query($sql);
    }
    /**
     * Obtiene la cantidad de filas de la consulta.
     */
    public function contar_filas()
    {
        return $this->conn->affected_rows;
    }
}
?>