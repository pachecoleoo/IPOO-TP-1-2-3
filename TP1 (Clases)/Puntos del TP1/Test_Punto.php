<?php
include 'Punto.php';
echo "arranca \n";
$p = new Punto(5,7);  // se crea un objeto punto y se asigna a la variable, hace referenacia al construct
print_r($p);
echo "imprimio?";
echo $p->getCoordenada_x(). "\n";       // se visualiza el valor contenido en la variable instancia x
echo $p->getCoordenada_y(). "\n";       // se visualiza el valor contenido en la variable instancia y

$p2 = new Punto(10,14); 
echo $p2;
echo "La distancia entre los punto es: ".$p->distancia($p2)."\n";

echo "La distancia entre los punto es: ".$p->distancia_2($p2)."\n";

?>