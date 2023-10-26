<?php
class MetodosLugares {
    private $ip;
    private $lugar;
    private $descripcion;

    function __construct(){
        if(isset($_POST["ip"])){$this->ip=$_POST["ip"];}
        if(isset($_POST["lugar"])){$this->lugar=$_POST["lugar"];}
        if(isset($_POST["descripcion"])){$this->descripcion=$_POST["descripcion"];}
    }
    function mostrar($conexion){
        $sql = "SELECT * FROM 'lugar'";
        $resultado = $conexion->query("SELECT * FROM lugar");
        if ($resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                echo "ID: " . $fila["ip"]. " - Nombre: " . $fila["lugar"] . " - Firma: " . $fila["descripcion"] . "<br>";
            }
        } else
            echo "No hay resultados";
    }
    function crear($conexion){
        $sql = "INSERT INTO lugar (ip, lugar, descripcion) VALUES ('$this->ip', '$this->lugar', '$this->descripcion')";
        try{
            if ($conexion->query($sql) == TRUE) {
                echo "Registro creado";
            } else
                echo "Error al crear registro";
        }catch(Exception $e){
            if($e->getCode()==1062)
                echo "Error clave duplicada<br>";
        }
    }
  
    function modificar($conexion){
        if ($this->comprobarExistencia($this->ip,$conexion))
        {
            $sql = "UPDATE lugar SET lugar='$this->lugar', descripcion='$this->descripcion' WHERE ip='$this->ip'";
    
            if ($conexion->query($sql) == TRUE) {
                echo "Registro actualizado";
            } else {
                echo "Error";
            }
        }else
           echo "No se encuentra el registro seleccionado a modificar<br>";
    }
    function eliminar($conexion){
        if($this->comprobarExistencia($this->ip,$conexion)){
            $sql = "DELETE FROM lugar WHERE ip='$this->ip'";
            if ($conexion->query($sql) == TRUE) {
                echo "Registro eliminado";
            } else {
                echo "Error al eliminar registro";
            }
        }else
            echo "No existe registro a borrar<br>";
    }  
    function volver(){
        echo "<a href='lugar.html'>Volver</a>";
    }
    function comprobarExistencia($id,$conexion){
        $resultado = $conexion->query("SELECT * from lugar where ip='$id'");
        if ($resultado->num_rows > 0)
            return true;
        else
            return false;
    }
}
?>