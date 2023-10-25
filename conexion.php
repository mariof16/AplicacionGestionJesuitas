<?php
class Conexion {
    private $server = "localhost";
    private $usuario = "root";
    private $contra = "";
    private $bbdd = "jesuitas";
    public $conn;

    public function __construct() {
        $this->conn = new mysqli($this->server, $this->usuario, $this->contra, $this->bbdd);
    }
}
?>