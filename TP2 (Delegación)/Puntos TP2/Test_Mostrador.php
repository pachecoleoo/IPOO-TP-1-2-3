<?php

include_once "Mostrador.php";
include_once "Banco.php";

//Datos:
$tramite1 = "Añadir cuenta bancaria";
$tramite2 = "Extraer dinero y alajas";
$horarios1 = ["Apertura" => 8.00, "Cierre" => 13.00];

//Mostradores:
$mostrador1 = new Mostrador("mostrador 1", $tramite1, 3, 11, $tramite1, $horarios1);
$mostrador2 = new Mostrador("mostrador 2", $tramite2, 10, 10, $tramite1, $horarios1);
$mostrador3 = new Mostrador("mostrador 3", $tramite2, 12, 12, $tramite1, $horarios1);
$mostradores = [$mostrador1, $mostrador2, $mostrador3];

//Bancos: 
$banco1 = new Banco($mostradores);

//Funcionamiento:
//echo $mostrador1->atiende($tramite1);
//echo $banco1->mostradoresQueAtienden($tramite2);
echo $banco1->mejorMostradorPara($tramite2);
