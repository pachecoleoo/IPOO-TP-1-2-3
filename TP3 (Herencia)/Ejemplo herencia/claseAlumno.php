<?php

include 'clasePersona.php';

class Alumno extends Persona
{ //clase que representa a un alumno de Fai
    private $legajo;
    public function __construct($videntificacion, $vnombre, $vapellido, $vlegajo)
    {
        //constructor alumno 
        //invocamos al consturctor de Persona
        parent::__construct($videntificacion, $vnombre, $vapellido);
        //agregamos al nuevo atributo
        $this->legajo = $vlegajo;
    }
    /**
     * Get the value of legajo
     */
    public function getLegajo()
    {
        return $this->legajo;
    }

    /**
     * Set the value of legajo
     *
     * @return  self
     */
    public function setLegajo($legajo)
    {
        $this->legajo = $legajo;

        return $this;
    }

    public function __toString()
    {
        $cadena = parent::__toString();
        $cadena .= "\n Legajo: " . $this->getLegajo();
        return $cadena;
    }
}
