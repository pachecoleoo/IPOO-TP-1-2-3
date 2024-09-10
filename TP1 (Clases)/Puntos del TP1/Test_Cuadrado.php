<?php

include_once "Cuadrado.php";
$pA = ["x" => 0, "y" => 0];
$pB = ["x" => 4, "y" => 0];
$pC = ["x" => 4, "y" => 6];
$pD = ["x" => 0, "y" => 6];

$cuadrado1 = new Cuadrado($pA, $pB, $pC, $pD);

// Puntos inicializados
echo $cuadrado1;

echo "\nEl area del cuadrado es: " . $cuadrado1->calculaArea() . "m2" . "\n";

echo $cuadrado1->desplazar($pD);

echo "\nEl cuadrado se desplazo 2 puntos hacia la derecha" . $cuadrado1;

echo "Cuantas unidades desea aumentar?: \n";
$unidad = trim(fgets(STDIN));
echo $cuadrado1->aumentarTamano($unidad);

echo "\nSe aumento el cuadrado por 3 unidades mas" . $cuadrado1;
// echo $cuadrado1;