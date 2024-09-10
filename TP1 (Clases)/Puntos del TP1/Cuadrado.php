<?php
/*
Implementar en php de forma tradicional y sin usar las palabras reservadas de php:
Para cada una de las siguientes clases implementar los métodos de acceso 
de cada una de las variables instancias , el método _ _toString() 
(que permite visualizar los valores que poseen las variables instancia) y 
por último, implementar la clase TestNombreClase para probar cada uno 
de los métodos implementados en cada clase.

Crear una clase Cuadrado que modele cuadrados por medio de cuatro puntos (los vértices). Puede utilizar arreglos asociativos para implementar cada uno de los vértices. La clase dispondrá de los siguientes métodos:

11.a. Método constructor _ _construct () que recibe como parámetros las coordenadas de los puntos.

11.b. Los métodos de acceso de cada uno de los atributos de la clase.

11.c. area(): método que calcula el área del cuadrado.

11.d. desplazar($d): método que recibe por parámetro un punto y desplaza el cuadrado en el plano desde su punto mas inferior izquierdo.

11.e. aumentarTamaño($t): método que recibe por parámetro el tamaño que debe aumentar el cuadrado.

11.f. Redefinir el método _ _toString() para que retorne la información de los atributos de la clase.

    p4--p3
    |   |
    p1--p2

    p4 = ["x" => 0, "y" => 4];      p3 = ["x" => 4, "y" => 4];
    p1 = ["x" => 0, "y" => 0];      p2 = ["x" => 4, "y" => 0];
    
*/
class Cuadrado
{
    private $puntos; //array multidimensional de tipo asociativo  de puntos



    public function __construct($pA, $pB, $pC, $pD)
    {
        $this->puntos = [
            "pA" => $pA,
            "pB" => $pB,
            "pC" => $pC,
            "pD" => $pD,
        ];
    }

    public function setPuntos($puntos)
    {
        $this->puntos = $puntos;
    }
    public function getPuntos()
    {
        return $this->puntos;
    }

    public function calculaArea()
    {
        $puntosCuadradoArea = $this->getPuntos();

        $base = $puntosCuadradoArea["pB"]["x"] - $puntosCuadradoArea["pA"]["x"];

        $altura = $puntosCuadradoArea["pD"]["y"] - $puntosCuadradoArea["pA"]["y"];

        return $base * $altura;
    }

    public function desplazar($puntoD)
    {
        // Desplazar todo el cuadrado según las coordenadas del punto dado
        $this->puntos["pA"]['x'] += $puntoD['x'];
        $this->puntos["pA"]['y'] += $puntoD['y'];
        $this->puntos["pB"]['x'] += $puntoD['x'];
        $this->puntos["pB"]['y'] += $puntoD['y'];
        $this->puntos["pC"]['x'] += $puntoD['x'];
        $this->puntos["pC"]['y'] += $puntoD['y'];
        $this->puntos["pD"]['x'] += $puntoD['x'];
        $this->puntos["pD"]['y'] += $puntoD['y'];
        // No necesitas devolver nada, ya que estás modificando directamente los atributos del objeto

    }

    public function aumentarTamano($tamano)
    { // La ecuacion que formulo, es sobre la constante de punto A, donde es el unico punto, que no se expande. El resto de los puntos cumple la funcion de expandirse sobre la constante A. 
        $this->puntos["pB"]["x"] += $tamano;
        $this->puntos["pC"]["x"] += $tamano;
        $this->puntos["pC"]["y"] += $tamano;
        $this->puntos["pD"]["y"] += $tamano;
    }

    public function __toString()
    {


        $p1 = "P1: x = " . $this->getPuntos()["pA"]["x"] . ", y = " . $this->getPuntos()["pA"]["y"] . "\n";
        $p2 = "P2: x = " . $this->getPuntos()["pB"]["x"] . ", y = " . $this->getPuntos()["pB"]["y"] . "\n";
        $p3 = "P3: x = " . $this->getPuntos()["pC"]["x"] . ", y = " . $this->getPuntos()["pC"]["y"] . "\n";
        $p4 = "P4: x = " . $this->getPuntos()["pD"]["x"] . ", y = " . $this->getPuntos()["pD"]["y"] . "\n";
        $mensaje = "\nPuntos del Cuadrado culo: \n" . $p1 . $p2 . $p3 . $p4;
        return $mensaje;
    }
}


//     pD--pC
//     |   |
//     pA--pB
