<?php
include_once "Disquera.php";
include_once "Persona.php";

$persona1 = new Persona("Pepito", "Juarez", "Libreta", "9.000.347");
$disquera = new Disquera("9:00", "19:00", "Abierto", "Yrigoyen 778", $persona1);
echo $disquera;
echo $disquera->horarioDeAtencion(19, 01);
echo $disquera->abrirDisquera(18, 59);
echo $disquera->cerrarDisquera(20, 00);
