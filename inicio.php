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
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container dflex">
    <div style="display: block;">
        <h2>Seleccione precio: </h2> 

        <form action="ver_por_precio.php" method="post">
            <select name="precio">
            <option value="0">Precio</option>
            <?php mostrar();?>
            </select>
            <input type="submit" class="btn btn-primary" value="Buscar">
        </form>
        <br>

        <a href="ver_todas.php">Buscar todas las habitaciones</a>
    </div>
    </div>

    
</body>
<footer style="margin-bottom:0; text-align:center;"
>Pipe_Andres_Parra</footer>
</html>