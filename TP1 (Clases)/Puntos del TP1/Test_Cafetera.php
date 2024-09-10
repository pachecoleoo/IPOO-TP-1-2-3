<?php
include 'Cafetera.php';

$cafetera1 = new Cafetera(250, 100);
echo "Mi cafetera actual tiene:" . $cafetera1;
echo "Ahora que llene mi cafetera vuelvo a tener " . $cafetera1->llenarCafetera() . " ml de café. \n";
echo "¿Cuanta cantidad de cafe, queres? \n";
$cantidad = trim(fgets(STDIN));
echo $cafetera1->servirTaza($cantidad);
echo $cafetera1->vaciarCafetera();
echo $cafetera1;
echo "Ahora coloque la cantidad de cafe que quiera agregarle a la cafetera:";
$cantidad = trim(fgets(STDIN));
echo $cafetera1->agregarCafe($cantidad);
echo $cafetera1;
