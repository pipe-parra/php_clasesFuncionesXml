<?php  //debo cambiar los nombres aqui
class Habitacion {

    //Declaración de Atributos
    private $codigo;
    private $nombre;
    private $precio;  
   
   
    //Declaración de constructor

    public function __construct($codigo, $nombre, $precio){
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    /*
     Solo se puede definir un constructor en una clase php, en esta pauta se usa el constructor por defecto
    Si se quiere usar el contructor con todos los parametros se debe comentar el constructor por defecto y
    descomentar el definido a continuación.
    */
    //Declaración de accesadores y mutadores
    public function getCodigo(){
        return  $this->codigo;
    }

    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }

    public function getNombre(){
        return  $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getPrecio(){
        return  $this->precio;
    }

    public function setPrecio($precio){
        $this->precio = $precio;
    }


    //método de impresión personalizado
    public function imprimir(){
   
    echo "Codigo: ".$this->codigo."<br>".
         "Nombre: ".$this->nombre."<br>".
         "Precio: ".$this->precio."<br>".
        
    }

} 
?> 