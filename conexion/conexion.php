<?php
//Clase Conexion en la que creamos la conexion a la BBDD usando la configuracion de configdb
include '../configuracion/configdb.php';
class Conexion {
    public $conn;

    public function __construct() {
        $this->conn = new mysqli(SERVER,USUARIO,CONTRA,BBDD);
    }
}
?>