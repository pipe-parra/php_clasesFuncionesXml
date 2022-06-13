<?php
//va a requerir de 'clases/conexion.php' que esta invocado en CargarPrecios;
require 'funciones/CargarPrecios.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluacion2 | Inicio</title>
</head>
<body>
    <div style="display: block;">
        <h2>Seleccione precio: </h2> 

        <form action="ver_por_precio.php" method="post">
            <select name="precio">
            <option value="0">Precio</option>
            <?php mostrar();?>
            </select>
            <input type="submit" value="Buscar">
        </form>
        <br>

        <a href="ver_todas.php">Buscar todas las habitaciones</a>
    </div>

    
</body>
<footer>Pipe_Andres_Parra</footer>
</html>