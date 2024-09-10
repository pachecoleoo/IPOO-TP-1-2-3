<?php
include_once "Libro.php";
include_once "Lectura.php";
include_once "Autor.php";

// c) leidosAnioEdicion($x): que retorne todos aquellos libros que fueron leídos y su año de edición es un
// año X recibido por parámetro.
// d) darLibrosPorAutor($nombreAutor): retorna todos aquellos libros que fueron leídos y el nombre de su
// autor coincide con el recibido por parámetro.


$sinapsisJoro = "Oculto en París, en lo alto de la catedral de Notre Dame, vive el joven Quasimodo, que no tiene permitido bajar nunca del campanario, hasta que un día decide hacerlo a escondidas y conoce a la bella Esmeralda, con quien vivirá su mayor aventura";
$sinapsisSirena = "Una sirena y sus seis hermanas se rebelan en contra de la orden de su padre para prohibir toda la música en el reino submarino.";
$autor1 = new Autor(" Peggy", "Holmes");
$autor2 = new Autor("Victor", "Hugo");
$autor3 = new Autor("Victor", "Hugo");

$libro01 = new Libro(1222, "La sirenita", 1990, "santillan", $autor3, 550, $sinapsisSirena);
$libro02 = new Libro(1223, "El jorobado de notredam", 1831, "Azernashr", $autor2, 1000, $sinapsisJoro);
$arrayLibros = [$libro01, $libro02];
$lectura1 = new Lectura($arrayLibros, 40);
echo $lectura1;
echo $lectura1->siguientePag();
echo $lectura1->anteriorPag();
echo $lectura1->irAPag(55);
$libro = "La sirenita";
$libroLeido = $lectura1->libroLeido($libro);
if ($libroLeido) {
    echo  "\nEl libro $libro ha sido leido 🟢";
} else
    echo "\nEl libro $libro no ha sido leido 🔴";
echo $lectura1->darSinopsis($libro);
echo $lectura1->leidosAnioEdicion($libro, 1990);
echo $lectura1->libroLeido($libro);

echo $lectura1->darLibrosPorAutor($autor1);
