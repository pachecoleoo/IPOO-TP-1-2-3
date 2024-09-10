<?php

class Linea
{
    private $punto1; //pA y pB
    private $punto2;  //pC y pD

    public function __construct($pA, $pB, $pC, $pD)
    {

        $this->punto1 =
            [
                "x" => $pA,
                "y" => $pB,
            ];
        $this->punto2 =
            [
                "x" => $pC,
                "y" => $pD,
            ];
    }

    public function getPunto1()
    {
        return  $this->punto1;
    }

    public function setPunto1($punto1)
    {
        $this->punto1 = $punto1;
    }

    public function getPunto2()
    {
        return $this->punto2;
    }

    public function setPunto2($punto2)
    {
        $this->punto2 = $punto2;
    }

    public function mueveDerecha($d)
    {
        $this->setPunto1(["x" => $this->getPunto1()["x"] + $d, "y" => $this->getPunto1()["y"]]);
        $this->setPunto2(["x" => $this->getPunto2()["x"] + $d, "y" => $this->getPunto2()["y"]]);
        return "(" . $this->getPunto1()["x"] . "," . $this->getPunto1()["y"] . ")" . "(" . $this->getPunto2()["x"]  . "," . $this->getPunto2()["y"] . ")";
    }
    public function mueveIzquierda($d)
    {
        $p1nuevaX = $this->getPunto1()["x"] - $d;
        $p2nuevaX = $this->getPunto2()["x"] - $d;
        $lineaizq = "(" . $p1nuevaX . "," . $this->getPunto1()["y"] . ")" . "(" . $p2nuevaX  . "," . $this->getPunto2()["y"] . ")";
        return $lineaizq;
    }
    public function mueveArriba($d)
    {
        $p1nuevaY = $this->getPunto1()["y"] + $d;
        $p2nuevaY = $this->getPunto2()["y"] + $d;
        $lineaArriba = "(" . $this->getPunto1()["y"] .  "," . $p1nuevaY . ")" . "(" .  $this->getPunto2()["y"]  . ","  . $p2nuevaY . ")";
        return $lineaArriba;
    }

    public function mueveAbajo($d)
    {
        $p1nuevaY = $this->getPunto1()["y"] - $d;
        $p2nuevaY = $this->getPunto2()["y"] -  $d;
        $lineaAbajo = "(" . $this->getPunto1()["y"] .  "," . $p1nuevaY . ")" . "(" .  $this->getPunto2()["y"]  . ","  . $p2nuevaY . ")";
        return $lineaAbajo;
    }
    public function __toString()
    {
        return "(" . $this->getPunto1()['x'] . "," . $this->getPunto1()['y'] . ")" . "(" . $this->getPunto2()['x'] . "," . $this->getpunto2()["y"] . ")";
    }
}
