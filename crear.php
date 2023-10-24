<?php
include('conexion.php');
if (isset($_POST["submit"])) {
    $idjesuita = $_POST["idjesuita"];
    $nombre = $_POST["nombre"];
    $firma = $_POST["firma"];

    $sql = "INSERT INTO jesuita (idjesuita, nombre, firma) VALUES ('$idjesuita', '$nombre', '$firma')";

    if ($conexion->query($sql) === TRUE) {
        echo "Registro creado";
    } else {
        echo "Error";
    }
}
?>