<?php

// Luego implementar la operación que carga las funciones en un teatro especifico, solicitando por consola la información de las mismas. También se debe verificar que el horario de las funciones, no se solapen para un mismo teatro.

include_once 'Teatro.php';
include_once 'Funcion.php';
// array con mis funciones

$funcion1 = new Funcion("Los mimos", 19.00, 2.30, 2500);
$funcion2 = new Funcion("Los clowns", 17.00, 2.17, 3000);
$funcion3 = new Funcion("Las mononas", 20.00, 1.45, 4000);
$funcion4 = new Funcion("High school", 18.30, 2.00, 5000);

$funcionesPuerredon = [$funcion1, $funcion2, $funcion3, $funcion4];

$teatro1 = new Teatro("Puerredon", $funcionesPuerredon);
echo $teatro1->cambiarNombre("Los mimos", "Mi casita de chocolate");
echo $teatro1->cambiarPrecio("Mi casita de chocolate", 10000);
echo $teatro1;


echo "\ncoloque nombre de la funciones a agregar: \n";
$nombreFuncion = trim(fgets(STDIN));
echo "Horario: \n";
$horario = trim(fgets(STDIN));
echo "Duración: \n";
$duracion = trim(fgets(STDIN));
echo "Precio: \n";
$precio = trim(fgets(STDIN));
$agregaFuncion = new Funcion($nombreFuncion, $horario, $duracion, $precio);

$teatro1->agregarFuncion($agregaFuncion);
echo $teatro1;
