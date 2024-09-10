<?php

include "CuentaBancaria.php";

$cuenta1 = new CuentaBancaria(112233, "41.347.641", 100.000, 10);
echo $cuenta1->actualizarSaldo();
echo "\n ¿Cuanta plata desea depositar? \n";
$plata = trim(fgets(STDIN));
$cuenta1->depositar($plata);
echo $cuenta1;
echo "\n ¿Cuanto efectivo desea retirar? \n";
$plata = trim(fgets(STDIN));
echo $cuenta1->retirar($plata);
