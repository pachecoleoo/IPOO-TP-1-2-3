<?php

include 'Linea.php';
$pA = 1; //coordenada x
$pB = 3; //coordenada y 
$pC = 4; //coordenada x
$pD = 0; // coordenada y

$Linea1 = new Linea($pA, $pB, $pC, $pD);

echo $Linea1;
echo "\n Coloque la Distancia que desea mover la linea hacia la derecha: \n ";
$distancia = trim(fgets(STDIN));
echo $Linea1->mueveDerecha($distancia);
echo "\n Coloque la Distancia que desea mover la linea hacia la izquierda:\n";
$distancia = trim(fgets(STDIN));
echo $Linea1->mueveIzquierda($distancia);
echo "\n Coloque la Distancia que desea mover la linea hacia arriba :\n";
$distancia = trim(fgets(STDIN));
echo $Linea1->mueveArriba($distancia);
echo "\n Coloque la Distancia que desea mover la linea hacia abajo :\n";
$distancia = trim(fgets(STDIN));
echo $Linea1->mueveAbajo($distancia);
