<?php
include 'conexion.php';
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
if(isset($_POST["mostrar"])){
    $metodos->mostrar($conexion->conn);
    $metodos->volver();
}
?>