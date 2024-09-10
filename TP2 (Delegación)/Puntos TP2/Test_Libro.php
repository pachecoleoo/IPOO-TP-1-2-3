<?php

include_once "Libro.php";
include_once "Autor.php";


$autor = new Autor("Juani", "Loiacono");
$sinapsis = "El libro trata de una nena con su mama y que se pierde en el bosque";
$libro1 = new Libro("978 - 607 - 0000 - 00 - 0", "Caperusita", "2000", "Penguin", $autor, 3300, $sinapsis);
echo $libro1;
