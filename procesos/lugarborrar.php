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
        <h2>Eliminar Registro</h2>
        <form action="gestionlugar.php" method="post">
            <label for="ip">IP del Registro a Eliminar:</label>
            <?php
            echo "<input type='text' name='ip' required value=".$_GET["ip"].">";
            ?>
            <br>
            <input type="submit" name="eliminar" value="eliminar">
        </form>
    </body>
</html>