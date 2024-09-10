<?php

// funciones sean un objeto que tenga las  variables nombre, horario de inicio, duración de la obra y precio. 
class Funcion
{
    private $nombre;
    private $horarioInicio;
    private $duracion;
    private $precio;

    public function __construct($nombre, $horarioInicio, $duracion, $precio)
    {
        $this->nombre = $nombre;
        $this->horarioInicio = $horarioInicio;
        $this->duracion = $duracion;
        $this->precio = $precio;
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
     * Get the value of horarioInicio
     */
    public function getHorarioInicio()
    {
        return $this->horarioInicio;
    }

    /**
     * Set the value of horarioInicio
     *
     * @return  self
     */
    public function setHorarioInicio($horarioInicio)
    {
        $this->horarioInicio = $horarioInicio;

        return $this;
    }

    /**
     * Get the value of duracion
     */
    public function getDuracion()
    {
        return $this->duracion;
    }

    /**
     * Set the value of duracion
     *
     * @return  self
     */
    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;

        return $this;
    }

    /**
     * Get the value of precio
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set the value of precio
     *
     * @return  self
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    public function __toString()
    {
        $msj = "";
        $msj .= "Nombre funcion: " .  $this->getNombre() . "\n";
        $msj .= "Horario de Inicio: " . $this->getHorarioInicio() . "\n";
        $msj .= "Duración: " . $this->getDuracion() . "\n";
        $msj .= "Precio: " . $this->getPrecio();

        return $msj;
    }
}
