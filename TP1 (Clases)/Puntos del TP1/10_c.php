<?php

class Fecha
{
    private $dia;
    private $mes;
    private $ano;

    public function __construct($dia, $mes, $ano)
    {
        $this->dia = $dia;
        $this->mes = $mes;
        $this->ano = $ano;
    }

    public function formaAbreviada()
    {
        return $this->getdia() . "/" . $this->getmes() . "/" . $this->getano();
    }
    public function formaExtendida()
    {
        $nombreDelMes = [1 => "enero", 2 => "febrero", 3 => "marzo", 4 => "abril", 5 => "mayo", 6 => "junio", 7 => "julio", 8 => "agosto", 9 => "septiembre", 10 => "octubre", 11 => "noviembre", 12 => "diciembre"];
        return $this->getdia() . " de " . $nombreDelMes[$this->getmes()] . " de " . $this->getano();
    }

    public function incrementarDias($entero)
    {
        $dianuevo = $this->getdia();
        $mesnuevo = $this->getmes();
        $anonuevo = $this->getano();

        $dianuevo = $dianuevo + $entero;



        // se suman los días totales y se comprueba la verificacion con el mes concurrido 
        if ($this->getmes() == 1 || $this->getmes() == 4 || $this->getmes() == 9 || $this->getmes() == 11 && $dianuevo > 30) {
            $dianuevo = $dianuevo - 30;
            $this->setdia($dianuevo);
            $this->setmes($mesnuevo + 1);
        } elseif ($this->getmes() == 2 &&  $dianuevo > 28) {
            $dianuevo = $dianuevo - 28;
            $this->setdia($dianuevo);
            $this->setmes($mesnuevo + 1);
        } elseif ($dianuevo > 31) { //no le pongo otras condiciones porque serían los demas meses 
            $dianuevo = $dianuevo - 31;
            $this->setdia($dianuevo);
            $this->setmes($mesnuevo + 1);
        } else {
            $this->setdia($dianuevo);
        }
        if ($mesnuevo > 12) {
            $this->setmes(1);
            $this->setano($anonuevo + 1);
        }
        return $this->getano() . ":" . $this->getmes() . ":" . $this->getdia();
    }


    /**
     * setea el día 
     */
    public function setdia($dia)
    {
        $this->dia = $dia;
    }

    /**
     * retorna el dia
     */
    public function getdia()
    {
        return $this->dia;
    }
    /**
     * setea el mes
     */
    public function setmes($mes)
    {
        $this->mes = $mes;
    }
    /**
     * retorna el mes
     */
    public function getmes()
    {
        return $this->mes;
    }

    /**
     * setea el año
     */
    public function setano($ano)
    {
        $this->ano = $ano;
    }
    /**
     * retorna el año 
     */
    public function getano()
    {
        return  $this->ano;
    }

    /**
     * retorna año bisiesto
     */
    public function getBisiesto()
    {
        $bisiesto = $this->getano();
        $esBisiesto = ($bisiesto % 4 == 0 && ($bisiesto % 100 != 0 || $bisiesto % 400 == 0));
        if ($esBisiesto) {
            $dia = $this->getdia() + 1;
            $this->setdia($dia);
        }
        return $esBisiesto;
    }

    public function __toString()
    {
        return $this->formaAbreviada() . $this->formaExtendida();
    }
}

$nuevoDia = new Fecha(22, 2, 2024);
echo "Fecha abreviada: " . $nuevoDia->formaAbreviada();
echo "Fecha extendida: " . $nuevoDia->formaExtendida() . "s\n";
echo "\n ingrese numero entero ";
$entero = trim(fgets(STDIN));
echo $nuevoDia = $nuevoDia->incrementarDias($entero);
