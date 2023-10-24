<?php
include('conexion.php');
$sql = "SELECT * FROM '$bbdd'";
$resultado = $conexion->query("SELECT * FROM jesuita");

if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        echo "ID: " . $fila["idJesuita"]. " - Nombre: " . $fila["nombre"] . " - Firma: " . $fila["firma"] . "<br>";
    }
} else {
    echo "No hay resultados";
}
?>