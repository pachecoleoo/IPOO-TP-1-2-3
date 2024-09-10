<?php

class Persona
{
    //Clase que representa una persona 
    private $identificacion;
    private $nombre;
    private $apellido;

    public function __construct($videntificacion, $vnombre, $vapellido)
    { //constructor de persona
        $this->identificacion = $videntificacion;
        $this->nombre = $vnombre;
        $this->apellido = $vapellido;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of apellido
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set the value of apellido
     *
     * @return  self
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get the value of identificacion
     */
    public function getIdentificacion()
    {
        return $this->identificacion;
    }

    /**
     * Set the value of identificacion
     *
     * @return  self
     */
    public function setIdentificacion($identificacion)
    {
        $this->identificacion = $identificacion;

        return $this;
    }

    public function __toString()
    {
        return "ID: " . $this->getIdentificacion() .
            "\n Nombre: " . $this->getNombre() .
            "\n Apellido: " . $this->getApellido();
    }
}
