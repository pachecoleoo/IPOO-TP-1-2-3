<?php
class Disquera
{
    private $hora_desde;
    private $hora_hasta;
    private $estado;
    private $direccion;
    private $duenio;

    public function __construct($hora_desde, $hora_hasta, $estado, $direccion, Persona $objPersona)
    {
        $this->hora_desde = $hora_desde;
        $this->hora_hasta = $hora_hasta;
        $this->estado = $estado;
        $this->direccion = $direccion;
        $this->duenio = $objPersona;
    }

    public function getHora_Desde()
    {
        return $this->hora_desde;
    }

    public function setHora_Desde($hora_desde)
    {
        $this->hora_desde = $hora_desde;
    }
    public function getHora_Hasta()
    {
        return $this->hora_hasta;
    }

    public function setHora_Hasta($hora_hasta)
    {
        $this->hora_hasta = $hora_hasta;
    }
    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;
    }
    public function getDireccion()
    {
        return $this->direccion;
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }
    public function getObjPersona()
    {
        return $this->duenio;
    }

    public function setObjPersona($duenio)
    {
        $this->duenio = $duenio;
    }

    public function __toString()
    {
        return  "Abierto desde las: " . $this->getHora_Desde() . "\nHasta las :" . $this->getHora_Hasta() . "\nEstado: " . $this->getEstado() . "\nDirección: " . $this->getDireccion() . "\nDueño:\n" . $this->getObjPersona() . "\n";
    }

    public function horarioDeAtencion($hora, $minuto)
    {
        // Separar la hora en horas y minutos de la Apertura
        $partesA = explode(":", $this->getHora_Desde());

        // Obtener las horas y los minutos de Apertura 
        $horaApertura = $partesA[0];
        $minutosApertura = $partesA[1];
        // Separa la hora en horas y minutos del cierre 
        $partesC = explode(":", $this->getHora_Hasta());

        // Obtener las horas y los minutos de Cierre 
        $horaCierre = $partesC[0];
        $minutosCierre = $partesC[1];

        if (
            ($hora > $horaApertura || ($hora == $horaApertura && $minuto >= $minutosApertura)) &&
            ($hora < $horaCierre || ($hora == $horaCierre && $minuto < $minutosCierre))
        ) {
            $msj =  "true"; //abiero
        } else {
            $msj =  "false"; // cerrado
        }

        return $msj;
    }

    public function abrirDisquera($hora, $minuto)
    {
        $rta = $this->horarioDeAtencion($hora, $minuto);

        if ($rta == "true") {
            $this->setEstado("Abierto");
        }
        return "\nEstado: " . $this->getEstado();
    }

    public function cerrarDisquera($hora, $minuto)
    {
        $rta = $this->horarioDeAtencion($hora, $minuto);

        if ($rta == "false") {
            $this->setEstado("Cerrado");
        }

        return "\nEstado: " . $this->getEstado();
    }
}
