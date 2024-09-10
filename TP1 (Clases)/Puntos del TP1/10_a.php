<?php
class Calculadora{
    private $numero1;
    private $numero2;


    public function __construct ($unNum, $otroNum){
    $this->numero1=$unNum;
    $this->numero2= $otroNum;
    }

    public function getmultiplicar(){
    $total = $this-> numero1 * $this-> numero2;
    return $total;
    }

    public function getsumar(){
        $total = $this-> numero1 + $this-> numero2;
        return $total;
    }
    
    public function getrestar(){
        $total = $this-> numero1 - $this-> numero2;
        return $total;
    }

    public function getdividir(){
        $total = $this-> numero1 / $this-> numero2;
        return $total;
    }

    public function __toString(){

    }
}

do {
    echo "Ingrese numero 1: ";
    $numero1 = trim(fgets(STDIN));
    echo "Ingrese numero 2: ";
    $numero2 =  trim(fgets(STDIN));
    $cuenta1 = new Calculadora($numero1, $numero2);
    echo "\n su suma es: ".$cuenta1->getsumar()."\n su resta es: ".$cuenta1->getrestar(). "\n su multiplicacion es: ".$cuenta1->getmultiplicar(). "\n su división es: ".$cuenta1->getdividir();
    echo "\n desea volver a utilizar la calculadora? n/s ";
    $respuesta = trim(fgets(STDIN));
} while( $respuesta <> "n");

