<?php
include('conexion.php');
if (isset($_POST["submit"])) {
    $idjesuita = $_POST["idJesuita"];

    $sql = "DELETE FROM jesuita WHERE idjesuita='$idjesuita'";
    
    if ($conexion->query($sql) === TRUE) {
        echo "Registro eliminado";
    } else {
        echo "Error";
    }
}
?>