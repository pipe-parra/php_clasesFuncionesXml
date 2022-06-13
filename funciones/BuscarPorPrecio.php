<?php 
    function porPrecio(){
        // los 3 elementos que ocupare
        $fila = null;
        $valor = $_POST['precio'];
        $arrElementos = array();
        
        try {
            
            include "clases/conexion.php"; //uso la conexion a mi BD
            $conexion = new Conexion();
            $conexion = $conexion->getConexion(); //renombro aunque ocupo el mismo nombre en la materia salia cnx

            $query = "SELECT codigo, nombre, precio FROM habitacion Where precio = ?" ; //mi consulta a BD
            $sentencia = $conexion->prepare($query);
            $sentencia->bindParam(1, $valor); 
            $sentencia->execute();
            
            //recorro y pusheo el array de Elementos que creé
            foreach($sentencia as $fila) {
                array_push($arrElementos, $fila['codigo']);
                echo "Codigo: 00".$fila['codigo']."<br/>";
                array_push($arrElementos, $fila['nombre']);
                echo "Nombre: ".$fila['nombre']."<br/>";
                array_push($arrElementos, $fila['precio']);
                echo "Precio: $".$fila['precio']."<br/>";
                echo "<br/>";
            }

            //genero opciones de respuesta dependiendo el resultado que reciba
            if ($fila == null) {
                echo "<br>No se generó el Array";
            }if($arrElementos != null){
                echo "El array ha sido exportado y posee ". count($arrElementos)." elementos";
            }
            return $arrElementos;       
        }
        catch (PDOException $e){
            echo "¡Error!: " . $e->getMessage();
            die();
        }
    }
?>



