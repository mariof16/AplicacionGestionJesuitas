<?php
class MetodosJesuitas {
    private $idjesuita;
    private $nombre;
    private $firma;

    function __construct(){
        if(isset($_POST["idjesuita"])){$this->idjesuita=$_POST["idjesuita"];}
        if(isset($_POST["nombre"])){$this->nombre=$_POST["nombre"];}
        if(isset($_POST["firma"])){$this->firma=$_POST["firma"];}
    }
    /*  Funcion mostrar jesuitas
    function mostrar($conexion){
        $sql = "SELECT * FROM 'jesuita'";
        $resultado = $conexion->query("SELECT * FROM jesuita");
        if ($resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                echo "ID: " . $fila["idJesuita"]. " - Nombre: " . $fila["nombre"] . " - Firma: " . $fila["firma"] . "<br>";
            }
        } else
            echo "No hay resultados";
    }*/
    function crear($conexion){
        $sql = "INSERT INTO jesuita (idjesuita, nombre, firma) VALUES ('$this->idjesuita', '$this->nombre', '$this->firma')";
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
        if ($this->comprobarExistencia($this->idjesuita,$conexion))
        {
            $sql = "UPDATE jesuita SET nombre='$this->nombre', firma='$this->firma' WHERE idjesuita='$this->idjesuita'";
    
            if ($conexion->query($sql) == TRUE) {
                echo "Registro actualizado";
            } else {
                echo "Error";
            }
        }else
           echo "No se encuentra el registro seleccionado a modificar<br>";
    }
    function eliminar($conexion){
        if($this->comprobarExistencia($this->idjesuita,$conexion)){
            $sql = "DELETE FROM jesuita WHERE idjesuita='$this->idjesuita'";
            if ($conexion->query($sql) == TRUE) {
                echo "Registro eliminado";
            } else {
                echo "Error al eliminar registro";
            }
        }else
            echo "No existe registro a borrar<br>";
    }  
    function volver(){
        echo "<a href='../jesuita.html'>Volver</a>";
    }
    function comprobarExistencia($id,$conexion){
        $resultado = $conexion->query("SELECT * from jesuita where idjesuita='$id'");
        if ($resultado->num_rows > 0)
            return true;
        else
            return false;
    }
}
?>