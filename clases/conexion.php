<?php

//Clase conexion
class Conexion{
    //Var global
    private $conexion;
        //constructor
        function __construct(){
            $this -> conexion = new PDO('mysql:host=localhost;dbname=bdmira', 'root', '1234');
        }
        //Accesador
        public function getConexion(){
            return $this -> conexion;
        }
}
?>







