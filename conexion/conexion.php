<?php
include '../configuracion/configdb.php';
class Conexion {
    public $conn;

    public function __construct() {
        $this->conn = new mysqli(SERVER,USUARIO,CONTRA,BBDD);
    }
}
?>