<?php
//Clase MetodosJesuitas que se encarga de ejecutar consultas sql y mostrar los datos recibidos
class MetodosJesuitas {
    private $idjesuita;
    private $nombre;
    private $firma;

    //Constructor que da valor a las variables que utilizaremos en las consultas
    function __construct(){
        if(isset($_POST["idjesuita"])){$this->idjesuita=$_POST["idjesuita"];}
        if(isset($_POST["nombre"])){$this->nombre=$_POST["nombre"];}
        if(isset($_POST["firma"])){$this->firma=$_POST["firma"];}
    }
    //Metodo encargado de añadir un jesuita a la tabla jesuita
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
    //Metodo encargado de modificar un jesuita en la tabla jesuita
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
     //Metodo encargado de eliminar un jesuita en la tabla jesuita
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
    //Metodo encargado de añadir un link para volver a la pagina anterior
    function volver(){
        echo "<a href='../jesuita.html'>Volver</a>";
    }
    //Metodo encargado de comprobar si existe una fila especifica
    function comprobarExistencia($id,$conexion){
        $resultado = $conexion->query("SELECT * from jesuita where idjesuita='$id'");
        if ($resultado->num_rows > 0)
            return true;
        else
            return false;
    }
}
?>