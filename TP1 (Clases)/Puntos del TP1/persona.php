<?php
class Persona
{
    private $nombre;
    private $apellido;
    private $numero;

    public function __construct($nombre, $apellido, $celu)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->numero = $celu;
    }

    public function saludar($otra_persona)
    {
        echo "Hola, " . $otra_persona->nombre . ". Soy " . $this->apellido . " mi numero es" . $this->numero;
    }
}

$juan = new Persona("Juan", "pacheco", 2995207111);
$maria = new Persona("Maria", "odonel", 29931455);

$juan->saludar($maria); // Imprime: Hola, Maria. Soy Juan.