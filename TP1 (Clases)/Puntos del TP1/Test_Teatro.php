<?php

include_once "Teatro.php";

// array con mis funciones
$funcion1 = ["nombre" => "FUNCION 1 🎪", "precio" => 1000, "direccion" => "av. 1234", "teatro" => "Lavalle"];
$funcion2 = ["nombre" => "Funcion 2 🎪", "precio" => 2000, "direccion" => "av. colon", "teatro" => "Apollo"];
$funcion3 = ["nombre" => "Funcion 3 🎪", "precio" => 3000, "direccion" => "av. corrientes", "teatro" => "La caja"];
$funcion4 = ["nombre" => "Funcion 4 🎪", "precio" => 4000, "direccion" => "av. Moreno", "teatro" => " Colon"];


$teatro1 = new Teatro($funcion1, $funcion2, $funcion3, $funcion4);
echo "¿Que funcion desea modificar? coloque el numero: \n";
$numero = trim(fgets(STDIN));
echo "Escriba el nuevo nombre de la funcion:";
$nombre = trim(fgets(STDIN));
echo $teatro1->cambiarNombre($numero, $nombre);
echo "¿Que funcion desea modificar? coloque el numero: \n";
$numero = trim(fgets(STDIN));
echo "Escriba la nueva direccion:";
$direccion = trim(fgets(STDIN));
echo $teatro1->cambiarDireccion($numero, $direccion);
echo "¿Que funcion desea modificar? coloque el numero: \n";
$numero = trim(fgets(STDIN));
echo "Escriba el nuevo precio";
$precio = trim(fgets(STDIN));
echo $teatro1->cambiarPrecio($numero, $precio);
echo "¿Que funcion desea modificar? coloque el numero: \n";
$numero = trim(fgets(STDIN));
echo "Escriba el nuevo teatro";
$teatro = trim(fgets(STDIN));
echo $teatro1->cambiarTeatro($numero, $teatro);

echo $teatro1;
