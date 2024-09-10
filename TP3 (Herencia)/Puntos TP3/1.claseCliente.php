<?php
include_once '1.clasePersona.php';

class Cliente extends Persona
{
    private $numCliente;

    public function __construct($vDni, $vNombre, $vApellido, $vNumCliente)
    {
        parent::__construct($vDni, $vNombre, $vApellido);
        $this->numCliente = $vNumCliente;
    }

    /**
     * Get the value of numCliente
     */
    public function getNumCliente()
    {
        return $this->numCliente;
    }

    /**
     * Set the value of numCliente
     *
     * @return  self
     */
    public function setNumCliente($numCliente)
    {
        $this->numCliente = $numCliente;

        return $this;
    }


    public function __toString()
    {
        $cadena = "";
        $cadena .= parent::__toString();
        $cadena .= "\nNumero de cliente: " . $this->getNumCliente() . "\n";

        return $cadena;
    }
}
