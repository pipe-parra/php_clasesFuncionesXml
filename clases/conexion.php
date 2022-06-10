<?php  //debo cambiar los nombres aqui
class Conexion {
    private $conexion;
    function __construct()
    {
        try{
            $this->conexion = new PDO('mysql:host=localhost;dbname=bdmira', 'root', '1234');
        }catch{
            $this->conexion = null;
        }
    }
    function getConexion(){
        return $this->conexion;
    }
}
?>







/*

// ---------------------------------------------------------esto no es seguro -------------------------------------------------------------------
    //Declaración de Atributos
    private $conexion;
    
   
    //Declaración de constructor

    public function __construct($conexion){
        $this->conexion = $conexion;
    }

    

    //Declaración de accesadores y mutadores
    public function getConexion(){
        return  $this->conexion;
    }

    public function setConexion($conexion){
        $this->conexion = $conexion;
    }
// --------------------------------------------------------------hasta aqui------------------------------------------------------------------

    //método de impresión personalizado
    public function imprimir(){
   
    echo "Rut: ".$this->rut."<br>".
         "Nombre: ".$this->nombre."<br>".
         "Apellido: ".$this->apellido."<br>".
         "Edad: ".$this->edad."<br>".
         "Estado: ".$this->estado."<br>".
         "Genero: ".$this->genero."<br>".
         "Horas: ".$this->hora."<br>".
         "Valor: ".$this->valor."<br>";
    }

    //método de rebaja de mensualidad
    public function rebaja(){
        $this->valor = 0.95*$this->valor;
        return  $this->valor;
    }

    //metodo que imprime información en formato
    public function informacion(){

        return "----------------------------------------------------------<br>".
               "                      CLIENTE                             <br>".
               "----------------------------------------------------------<br>".
               $this->nombre." ".$this->apellido." "."$".$this->valor."  ".$this->hora."  horas semanales";
}

    }
   
?> */