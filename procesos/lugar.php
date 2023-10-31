<!--Mario Fuentes Fernandez-->
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CRUD</title>
        <link rel="stylesheet" href="../estilo/estilo.css">
    </head>
    <body class="formulario">
        <a href="crud.html">Volver</a><br>
        <?php
            include '../conexion/conexion.php';
            include 'metodoslugares.php';

            $conexion=new Conexion;
            $metodos= new MetodosLugares;
            $metodos->mostrar($conexion->conn);
        ?>
        <h2>Crear Registro</h2>
        <form action="procesos/gestionlugar.php" method="post" class="opciones">
            <label for="ip">Ip:</label><br>
            <input type="text" name="ip" required>
            <br>
            <label for="lugar">Lugar:</label><br>
            <input type="text" name="lugar" required>
            <br>
            <label for="descripcion">Firma:</label><br>
            <input type="text" name="descripcion" required>
            <br>
            <input type="submit" name="crear" value="crear">
        </form>
        <!--
        <h2>Actualizar Registro</h2>
        <form action="procesos/gestionlugar.php" method="post">
            <label for="ip">IP del Registro a Actualizar:</label>
            <input type="text" name="ip" required>
            <br>
            <label for="lugar">Nuevo Valor de Lugar:</label>
            <input type="text" name="lugar" required>
            <br>
            <label for="descripcion">Nuevo Valor de Firma:</label>
            <input type="text" name="descripcion" required>
            <br>
            <input type="submit" name="modificar" value="modificar">
        </form>

        <h2>Eliminar Registro</h2>
        <form action="procesos/gestionlugar.php" method="post">
            <label for="ip">IP del Registro a Eliminar:</label>
            <input type="text" name="ip" required>
            <br>
            <input type="submit" name="eliminar" value="eliminar">
        </form>-->
    </body>
</html>