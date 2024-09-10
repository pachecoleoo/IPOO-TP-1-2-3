<?php
// En un banco existen varios mostradores. Cada mostrador puede atender cierto tipo de trámites y tiene una cola de clientes, que no puede superar un número determinado para cada cola, de cada cola se conoce el número actual de personas que hay en ella. Cada cliente concurre al banco para realizar un solo trámite. Un trámite tiene un horario de creación y un horario de resolución.



class Mostrador
{
    private $nombre;
    private $tipoTramite;
    private $colaCantidad; //numero actual de personas que hay en la cola
    private $colaCantMaxima;
    private $tramiteDeCliente;
    private $horarioDeTramite;
    public function __construct($nombre, $tipoTramite, $colaCantidad, $colaCantMaxima, $tramiteDeCliente, $horarioDeTramite)
    {
        $this->nombre = $nombre;
        $this->tipoTramite = $tipoTramite;
        $this->colaCantidad = $colaCantidad;
        $this->colaCantMaxima = $colaCantMaxima;
        $this->tramiteDeCliente = $tramiteDeCliente;
        $this->horarioDeTramite = $horarioDeTramite;
    }



    /**
     * Get the value of tipoTramite
     */
    public function getTipoTramite()
    {
        return $this->tipoTramite;
    }

    /**
     * Set the value of tipoTramite
     *
     * @return  self
     */
    public function setTipoTramite($tipoTramite)
    {
        $this->tipoTramite = $tipoTramite;

        return $this;
    }

    /**
     * Get the value of colaCantidad
     */
    public function getColaCantidad()
    {
        return $this->colaCantidad;
    }

    /**
     * Set the value of colaCantidad
     *
     * @return  self
     */
    public function setColaCantidad($colaCantidad)
    {
        $this->colaCantidad = $colaCantidad;

        return $this;
    }

    /**
     * Get the value of colaCantMaxima
     */
    public function getColaCantMaxima()
    {
        return $this->colaCantMaxima;
    }

    /**
     * Set the value of colaCantMaxima
     *
     * @return  self
     */
    public function setColaCantMaxima($colaCantMaxima)
    {
        $this->colaCantMaxima = $colaCantMaxima;

        return $this;
    }

    /**
     * Get the value of tramiteDeCliente
     */
    public function getTramiteDeCliente()
    {
        return $this->tramiteDeCliente;
    }

    /**
     * Set the value of tramiteDeCliente
     *
     * @return  self
     */
    public function setTramiteDeCliente($tramiteDeCliente)
    {
        $this->tramiteDeCliente = $tramiteDeCliente;

        return $this;
    }

    /**
     * Get the value of horarioDeTramite
     */
    public function getHorarioDeTramite()
    {
        return $this->horarioDeTramite;
    }

    /**
     * Set the value of horarioDeTramite
     *
     * @return  self
     */
    public function setHorarioDeTramite($horarioDeTramite)
    {
        $this->horarioDeTramite = $horarioDeTramite;

        return $this;
    }
    /**
     * d) mostrador–>atiende($unTramite): devuelve true o false indicando si el tramite se puede atender o no en el mostrador; note que el tipo de trámite correspondiente a unTramite tiene que coincidir con alguno de los tipos de trámite que atiende el mostrador.
     */
    public function atiende($unTramite)
    {

        if ($this->getTipoTramite() == $unTramite) {
            $atiende = true;
        } else {
            $atiende = false;
        }

        return $atiende;
    }


    public function __toString()
    {
        $rta = "";
        $rta .= $this->getNombre() . ": \n";
        $rta .=  "\nHorario de tramite: " . "Apertura:" . $this->getHorarioDeTramite()['Apertura'] . "\nCierre:" . $this->getHorarioDeTramite()['Cierre'];
        $rta .= "\nTipo de Tramite: " . $this->getTipoTramite();
        $rta .= "\nCola cantidad de personas: " . $this->getColaCantidad();
        $rta .= "\n Tramite del cliente: " . $this->getTramiteDeCliente();
        $rta .= "\n Cantidad maxima permitidad: " . $this->getColaCantMaxima() . "\n\n";

        return $rta;
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
}
