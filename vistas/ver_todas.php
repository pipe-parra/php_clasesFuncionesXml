<?php
    require_once ""; //aqui no se a cual funcion llamar
?>

<DOCTYPE html>
        <html>

        <head>
            <meta charset='utf-8'>
            <title>Evaluacion Semana 4</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        </head>

        <body>
            <div class="card text-center">
                <div class="card-header">
                    Evaluacion Semana 4
                </div>
                <div class="card-body">
                    <h5 class="card-title">Registros existentes en la base de datos</h5>
                    <p class="card-text"></p>

                </div>
                <div class="card-footer text-muted">

                </div>

            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Codigo</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio</th>
                                               
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        foreach ($stmt as $fila) //aca debo cambiar claramente el $stmt
                         { ?>
                            <th scope="row"><?php echo $i ?></th>
                            <td><?php echo $fila['codigo'] ?></td>
                            <td><?php echo $fila['nombre'] ?></td>
                            <td><?php echo $fila['precio'] ?></td>
                                               
                    </tr>
                <?php 
                        } ?>
                </tbody>
            </table>
            <button type="button" class="btn btn-primary" href="/inicio.php">Volver</button>
        </body>

        </html>