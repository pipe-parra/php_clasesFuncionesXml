<?php  //debo cambiar los nombres aqui
class Habitacion {

    //Declaración de Atributos
    private $rut;
    private $nombre;
    private $apellido;  
    private $edad;  
    private $estado; 
    private $genero;
    private $hora;
    private $valor;
   
    //Declaración de constructor

    public function __construct(){
    
    }

    /*
     Solo se puede definir un constructor en una clase php, en esta pauta se usa el constructor por defecto
    Si se quiere usar el contructor con todos los parametros se debe comentar el constructor por defecto y
    descomentar el definido a continuación.
    public function __construct($rut, $nombre, $apellido, $edad, $estado, $genero, $hora, $valor)
    {
        $this->rut = $rut;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
        $this->estado = $estado;
        $this->genero = $genero;
        $this->hora = $hora;
        $this->valor = $valor;
    }*/

    //Declaración de accesadores y mutadores
    public function getRut(){
        return  $this->rut;
    }

    public function setRut($rut){
        $this->rut = $rut;
    }

    public function getNombre(){
        return  $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getApellido(){
        return  $this->apellido;
    }

    public function setApellido($apellido){
        $this->apellido = $apellido;
    }

    public function getEdad(){
        return  $this->edad;
    }

    public function setEdad($edad){
        $this->edad = $edad;
    }

    public function getEstado(){
        return  $this->estado;
    }

    public function setEstado($estado){
        $this->estado = $estado;
    }

    public function getGenero(){
        return  $this->genero;
    }

    public function setGenero($genero){
        $this->genero = $genero;
    }

    public function getHora(){
        return  $this->hora;
    }

    public function setHora($hora){
        $this->hora = $hora;
    }

    public function getValor(){
        return  $this->valor;
    }

    public function setValor($valor){
        $this->valor = $valor;
    }

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
   
?> 