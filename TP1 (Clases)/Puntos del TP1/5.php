<?php

class Persona {
    // genero los atributos -> variables instancia 
    public $nombre;
    private $apellido; // por convencion simepre tienen que ser privado y solo se accede a traves del get/set 
    private $fechaNac;  
    private $correo; 
    private $telefono; 
    private $direccion; 
    

    //genero el constructor
    public function __construct($nombre1,$apellido, $fechaNac, $correo, $telefono, $direccion) {
        $this->nombre = $nombre1;
        $this->apellido = $apellido;
        $this->fechaNac = $fechaNac;
        $this->correo = $correo;
        $this->telefono=$telefono;
        $this->direccion = $direccion; //referencia atributo SE UTILIZA SET PARA MODIFICAR.
    }

    //ahora genero los metodos

    public function getnombre(){
        return $this->nombre;
    }

    function setnombre($nombre2) {
        $this->nombre = $nombre2;
      }

    public function getapellido(){

        return $this->apellido;
    }
    public function getfechaNac(){
        return $this->fechaNac;
    }
    public function getcorreo(){
        return $this-> correo; 
    }
    public function gettelefono(){
        return $this->telefono;
    }
    public function getdireccion(){
        return $this->direccion;
    }

    public function __toString()
    {
        return "Nombre: ". $this->getnombre(). " \n Apellido: ". $this->getapellido() . "\n Nacimiento: " . $this->getfechaNac(). " \n Correo: ". $this->getcorreo(). "\n Tel: ".  $this->gettelefono().  "\n Dirección: ". $this->getdireccion() ; 
    }

    function __destruct() {
        echo "el objeto persona ha sido destruido"; //el destructor se utiliza para concluir con un objeto
      }

    
}

class SubPersona extends Persona{
    public function mensaje(){
        echo "soy ricky una persona ";
    }
}
$persona = new Persona("leo", "pacheco", 1990, "leonardoandrespacheco1998@gmail.com", 2995207111, "alem 605");
echo "\n".$persona->getnombre();
echo "\n".$persona->setnombre('leonardo'); //cambio el nombre desde adentro accedionedo al con SET 
echo "\n".$persona->getnombre();
$persona->nombre = "cachito "; //cambio el nombre desde afuera de la clase, siempre y cuando sea PUBLIC 
echo $persona->getnombre();
var_dump($persona instanceof Persona); //verifica si esta creada la intancia=objeto persona.
$subPersona= new SubPersona("ricki", "pacheco", 1998, "yahho", 299, "alem 605");
$subPersona->mensaje();