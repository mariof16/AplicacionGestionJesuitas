<?php
//Archivo PHP que gestiona que has enviado en el submit para ejecutar la funcion asignada
//Guardar campo que admite null como null si esta vacio

include '../conexion/conexion.php';
include 'metodosjesuitas.php';

$conexion=new Conexion;
$metodos= new MetodosJesuitas;

if(isset($_POST["crear"])){
    $metodos->crear($conexion->conn);
    $metodos->volver();
}
if(isset($_POST["eliminar"])){
    $metodos->eliminar($conexion->conn);
    $metodos->volver();
}
if(isset($_POST["modificar"])){
    $metodos->modificar($conexion->conn);
    $metodos->volver();
}
?>