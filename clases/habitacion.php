<?php  
class Habitacion {
    //Declaración de Atributos
    private $codigo;
    private $nombre;
    private $precio;  
   //Declaración de constructor
    function __construct($codigo, $nombre, $precio){
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->precio = $precio;
    }
    //Declaración de accesadores y mutadores
    public function getCodigo(){
        return  $this->codigo;
    }
    public function setCodigo($value){
        $this->codigo = $value;
    }
    public function getNombre(){
        return  $this->nombre;
    }
    public function setNombre($value){
        $this->nombre = $value;
    }
    public function getPrecio(){
        return  $this->precio;
    }
    public function setPrecio($value){
        $this->precio = $value;
    }
}
?>

