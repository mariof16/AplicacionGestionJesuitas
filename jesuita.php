<?php
include('conexion.php');

if(isset($_POST["crear"])){
    crear($conexion);
}
if(isset($_POST["borrar"])){
    borrar($conexion);
}
if(isset($_POST["modificar"])){
    modificar($conexion);
}
if(isset($_POST['mostrar'])){
    mostrar($conexion);
}


function crear($conexion){
    $idjesuita = $_POST["idjesuita"];
    $nombre = $_POST["nombre"];
    $firma = $_POST["firma"];

    $sql = "INSERT INTO jesuita (idjesuita, nombre, firma) VALUES ('$idjesuita', '$nombre', '$firma')";

    if ($conexion->query($sql) === TRUE) {
        echo "Registro creado";
    } else {
        echo "Error";
    }
    volver();
}
function borrar($conexion){
    $idjesuita = $_POST["idJesuita"];

    $sql = "DELETE FROM jesuita WHERE idjesuita='$idjesuita'";
    
    if ($conexion->query($sql) === TRUE) {
        echo "Registro eliminado";
    } else {
        echo "Error";
    }
    volver();
}
function modificar($conexion){
    $idjesuita = $_POST["idJesuita"];
    $nombre = $_POST["nombre"];
    $firma = $_POST["firma"];

    $sql = "UPDATE jesuita SET nombre='$nombre', firma='$firma' WHERE idjesuita='$idjesuita'";

    if ($conexion->query($sql) === TRUE) {
        echo "Registro actualizado";
    } else {
        echo "Error";
    }
    volver();
}
function mostrar($conexion){
    $sql = "SELECT * FROM 'jesuita'";
    $resultado = $conexion->query("SELECT * FROM jesuita");
    if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        echo "ID: " . $fila["idJesuita"]. " - Nombre: " . $fila["nombre"] . " - Firma: " . $fila["firma"] . "<br>";
    }
    } else {
        echo "No hay resultados";
    }
    volver();
}
function volver(){
    echo "<a href='index.php'>Volver</a>";
}
?>