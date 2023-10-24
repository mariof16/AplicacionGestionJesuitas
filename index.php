<!--
    Mario Fuentes Fernandez
    Pendiente:
    Verificaciones al actualizar regristo y eliminar
    Cuando funcionen las verificaciones cambiar codigo a POO 
-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>

<h2>Mostrar Registros</h2>
<form action="jesuita.php" method="post">
    <input type="submit" name="mostrar" value="mostrar">
</form>

<h2>Crear Registro</h2>
<form action="jesuita.php" method="post">
    <label for="idjesuita">Jesuita:</label>
    <input type="text" name="idjesuita" required>
    <br>
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" required>
    <br>
    <label for="firma">Firma:</label>
    <input type="text" name="firma" required>
    <br>
    <input type="submit" name="crear" value="crear">
</form>



<h2>Actualizar Registro</h2>
<form action="jesuita.php" method="post">
    <label for="idJesuita">ID del Registro a Actualizar:</label>
    <input type="text" name="idJesuita" required>
    <br>
    <label for="nombre">Nuevo Valor de Nombre:</label>
    <input type="text" name="nombre" required>
    <br>
    <label for="firma">Nuevo Valor de Firma:</label>
    <input type="text" name="firma" required>
    <br>
    <input type="submit" name="modificar" value="modificar">
</form>

<h2>Eliminar Registro</h2>
<form action="jesuita.php" method="post">
    <label for="idJesuita">ID del Registro a Eliminar:</label>
    <input type="text" name="idJesuita" required>
    <br>
    <input type="submit" name="eliminar" value="eliminar">
</form>

</body>
</html>