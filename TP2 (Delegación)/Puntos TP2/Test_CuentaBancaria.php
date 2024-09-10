<?php
include_once "Persona.php";
include_once "CuentaBancaria.php ";
$Persona = new Persona("Leonardo", "Pacheco", "Carnet", 41347641);
$cuenta1 = new CuentaBancaria(112233, $Persona, 100000, 10);
$cuenta1->actualizarSaldo();
echo  $cuenta1;
