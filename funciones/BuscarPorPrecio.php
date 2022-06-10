<?php
    require_once $_SERVER["DOCUMENT_ROOT"].'/bdmira/clases/conexion.php';

    function buscarporPrecio($precio){
        $cnx = new Conexion();
        $query = "SELECT * FROM habitacion where precio = ?";  //aca tengo dudad porque se supone que debo generar la consulta al xml? o no?
        $sentencia = $cnx->getConexion()->prepare($query);
        $sentencia->bindParam(0,$precio); //aca no se que estoy haciendo el primer parametro de donde sale y porque?
        $sentencia->execute();
        $resultado = $sentencia->fetch();
        return $resultado;
    }

?>
/*
recuerda que en esta funcion debo retornar un array  
para crear una variable de tipo array, debes utilizar la siguiente instrucción:
$arrElementos = array();
Para agregar elementos a un array, debes utilizar la siguiente instrucción 
array_push($arrElementos, $nuevoElemento);*/