<?php

include "Libro.php";
$libro1 = new Libro("978 - 607 - 0000 - 00 - 0", "1984", "2000", "Penguin", "George", "Orwell");
$perEditorial = "Santillan";
echo $libro1->perteneceEditorial($perEditorial) . "\n";
echo $libro1;
echo $libro1->aniosdeEdicion();
$libroRandom = "La sirenita";
$librosTitulos = ["peter pan", "La sirenita", "1984", "El jorobado"]; //coleccion de titulos de libro, para comparar si ya los tengo almacenada (1984)

echo $libro1->iguales($libroRandom, $librosTitulos);


$arregloLibros = [ //arreglo multidimensional (se utiliza para cuando quiero tener varios elementos con mismas claves)
    ["Editorial" => "Santillan", "Titulo" => "La sirena"],
    ["Editorial" => "El gato mimoso", "Titulo" => "Charlie en la fabrica"],
    ["Editorial" => "Santillan", "Titulo" => "Romeo y julieta"],
    ["Editorial" => "La vaca Lola", "Titulo" => "Maria elena"],
    ["Editorial" => "Santillan", "Titulo" => "Metamorfosis"],
];
$array = $libro1->librosYEditoriales($arregloLibros, $perEditorial);
print_r($array);
