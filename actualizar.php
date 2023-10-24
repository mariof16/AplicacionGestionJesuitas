<?php
include('conexion.php');

if (isset($_POST["submit"])) {
    $idjesuita = $_POST["idJesuita"];
    $nombre = $_POST["nombre"];
    $firma = $_POST["firma"];

    $sql = "UPDATE jesuita SET nombre='$nombre', firma='$firma' WHERE idjesuita='$idjesuita'";

    if ($conexion->query($sql) === TRUE) {
        echo "Registro actualizado";
    } else {
        echo "Error";
    }
}
?>