<?php

class Banco
{
    private $mostradores;
    private $colasDeTramites;
    public function __construct($coleccionMostradores)
    {
        $this->mostradores = $coleccionMostradores;
    }

    /**
     * Get the value of mostradores
     */
    public function getMostradores()
    {
        return $this->mostradores;
    }

    /**
     * Set the value of mostradores
     *
     * @return  self
     */
    public function setMostradores($mostradores)
    {
        $this->mostradores = $mostradores;

        return $this;
    }

    /**
     * cuando llega un cliente al banco se lo ubica en el mostrador que atienda el trámite que el cliente requiere, que tenga espacio y la menor cantidad de clientes esperando; si no hay lugar en ningún mostrador debe retornar un mensaje que diga al cliente que “será antendido en cuanto haya lugar en un mostrador”.
     */

    public function mejorMostradorPara($unTramite)
    {
        $cantidad = 1000;
        $mostradores = $this->getMostradores();
        $mostradoresHabilitados = [];
        $rta = "será antendido en cuanto haya lugar en un mostrador";
        foreach ($mostradores as $mostrador) {
            $tramite  = $mostrador->getTipoTramite();
            if ($tramite == $unTramite) {
                $mostradoresHabilitados[] = $mostrador;
                $filaCorta = $mostrador->getColaCantidad();
                $lugarEnFila = $mostrador->getColaCantMaxima() - $filaCorta;
                if ($filaCorta < $cantidad && $lugarEnFila <> 0) {
                    $cantidad =  $filaCorta;
                    $rta = "La cantidad de gente para esta fila es de $cantidad,pero queda espacio para $lugarEnFila personas";
                }
            }
        }
        return $rta;
    }

    /**
     *  e) banco–>mostradoresQueAtienden($unTramite): retorna la colección de todos los mostradores que atienden ese trámite.
     */
    public function mostradoresQueAtienden($unTramite)
    {

        $mostradores = $this->getMostradores();
        $mostradoresHabilitados = [];
        foreach ($mostradores as $mostrador) {
            $tramite  = $mostrador->getTipoTramite();
            if ($tramite == $unTramite) {
                $mostradoresHabilitados[] = $mostrador;
            }
        }

        $cantMostradores = count($mostradoresHabilitados);
        $rta = "";
        if ($cantMostradores > 0) {
            $rta .= "Los mostradores habilitados son: \n";
            for ($i = 0; $i < $cantMostradores; $i++) {
                $rta .= $mostradoresHabilitados[$i];
            }
        } else $rta = "No hay mostradores habilitados para ese tramite";

        return $rta;
    }

    /**
     * Get the value of colasDeTramites
     */
    public function getColasDeTramites()
    {
        return $this->colasDeTramites;
    }

    /**
     * Set the value of colasDeTramites
     *
     * @return  self
     */
    public function setColasDeTramites($colasDeTramites)
    {
        $this->colasDeTramites = $colasDeTramites;

        return $this;
    }
}
// 7. Realizar las modificaciones necesarias en la clase Banco para poder gestionar colas de trámites además de colas de clientes. De cada trámite se conoce el cliente que le da inicio. Asimismo del trámite también se conoce: la fecha de ingreso, la fecha de cierre, el horario de ingreso y el horario de cierre.
// Implementar los siguientes métodos:
// a) ingresarTramite: esta etapa es cuando la persona ya esta en el mostrador explicando el trámite para que sea tratado. Ya salió de la cola de trámites y está siendo atendido en el mostrador correspondiente.
// b) cerrarTramite: es cuando el trámite ha sido resuelto. Además, debe validar que el tramite a cerrar está
// abierto y setearlo en estado cerrado.
// c) mostrador–> cantTramitesAtendidosMes(): el método retorna la cantidad promedio de trámites resueltos por día en este mes.
// d) mostrador–> porcentajeTramitesResuelto(): método que da el porcentaje de tramites resueltos sobre  el total de recibidos.
// e) tramite–>cantTramitesAbiertos(): método que retorna la cantidad de trámites abiertos de un cliente.
// f) tramite–>cantTramitesCerrados(): método que retorna la cantidad de trámites cerrados de un cliente.
// g) banco–>promTramitesIngresadosDia(): método que retorna el promedio de trámites ingresados por
// día.
// h) banco–>promTramitesCerradosDia(): método que retorna el promedio de trámites cerrados por día.
// i) banco–>mostradorResuelveMasTramites(): método que retorna el mostrador con mayor porcentaje de
// tramites resueltos (sobre el total recibido) en el mes actual (o en un rango de fechas - pueden usar el
// tda fecha o clases de php, por ejemplo usar el getdate() de Php).