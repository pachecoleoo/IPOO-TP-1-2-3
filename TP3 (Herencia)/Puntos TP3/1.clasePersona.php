<?php
// 1. Defina e implemente una clase Cliente que hereda de la clase Persona (DNI, Nombre y Apellido) con la
// información básica de un cliente (Nro. de Cliente, DNI, Nombre y Apellido).

class Persona
{
    private $dni;
    private $nombre;
    private $apellido;

    public function __construct($vDni, $vNombre, $vApellido)
    {
        $this->dni = $vDni;
        $this->nombre = $vNombre;
        $this->apellido = $vApellido;
    }

    /**
     * Get the value of dni
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set the value of dni
     *
     * @return  self
     */
    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
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

    public function __toString()
    {
        $cadena = "";
        $cadena .= "DNI: " . $this->getDni();
        $cadena .= "\nNombre: " . $this->getNombre();
        $cadena .= "\nApellido: " . $this->getApellido();
        return $cadena;
    }
}
