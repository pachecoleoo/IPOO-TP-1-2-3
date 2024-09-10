<?php

include 'Login.php';
$ultimasCuatro = [1234, 1111, 2222, 3333];
$ultimasCuatro2 = [00000, 55555, 99999];
$usuario1 = new Login("leonardo", 1234, "milei me ama", $ultimasCuatro);
$usuario2 = new Login("pepito", 00000, "seño susana", $ultimasCuatro2);
echo "Ingrese contraseña para validar:";
$contrasenia = trim(fgets(STDIN));
echo $usuario1->validarContrasenia($contrasenia);
do {
    echo "\n Ahora, eligá una de las opciones: \n";
    echo "
    1) Cambiar contraseña \n
    2) Recordar contraseña (a traves de frase) \n 
    3) Ver las ultimas cuatro contraseñas \n
    4) Validar contraseña de nuevo. \n
    5) Apreta 5 para salir.
    Opcion: ";

    $opcion  = trim(fgets(STDIN));
    if ($opcion == 1) {
        echo "Ingrese nueva contraseña para cambiar: ";
        $contrasenia = trim(fgets(STDIN));
        $usuario1->cambiarContrasenia($contrasenia);
    } elseif ($opcion == 2) {
        echo "ingrese frase para recordar contraseña:";
        $frase = trim(fgets(STDIN));
        $usuario1->recordarXfrase($frase);
    } elseif ($opcion == 3) {
        print_r($usuario1->gethistorialContrasenias());
    } elseif ($opcion == 4) {
        echo "Ingrese contraseña para validar:";
        $contrasenia = trim(fgets(STDIN));
        echo $usuario1->validarContrasenia($contrasenia);
    } elseif ($opcion <> 5) {
        echo "No marcaste una opcion válida";
    } else echo "Gracias por venir";
} while ($opcion <> "5");
