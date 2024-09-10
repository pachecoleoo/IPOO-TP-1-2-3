<?php

include_once "Producto.php";
include_once "Tienda.php";
include_once "Item.php";
include_once "Venta.php";


//1. Se crea una colección con un mínimo de 4 productos, uno de los productos tiene como código de barra 0001 y cantidad stock 3.
$producto1 =  new Producto(0001, "Remera", "Under", "Marron", "M", "Estampa Oso de peluche", 3);
$producto2 = new Producto(0002, "Remera", "Nike", "Gris", "L", "Remera nike de algodon", 5);
$prodcuto3 = new Producto(0003, "Pantalon", "Puma", "Negro", "XL", "Pantalon corto para correr", 2);
$producto4 = new Producto(0040, "Buzo", "Adidas", "Negro", "XXL", "Buzo polar abrigado", 0);
$colProductos = [$producto1, $producto2, $prodcuto3, $producto4];

$colVentas = [];

//2. Se crea un objeto Tienda con la colección de productos creada en 1.
$objTienda = new Tienda("Ferreira", "Av. Alem 898", 2995027111, $colProductos, $colVentas);



//3. Crear un arreglo asociativo con la información de 3 de los productos que se encuentran en la colección creada en 1. Uno de los elementos del arreglo asociativo es: codigoBarra=0001 y cantidad=5.
$arregloAsociativo = [];
$arregloAsociativo = [
    ["codigoBarra" => 0001, "cantidad" => 5],
    ["codigoBarra" => 0002, "cantidad" => 5],
    ["codigoBarra" => 0003, "cantidad" => 2],
    ["codigoBarra" => 0040, "cantidad" => 0],
];

//4. Invocar al metodo realizarVenta con el arreglo asociativo creado en 3.
//$objTienda->realizarVenta($arregloAsociativo);
$cantidad = -32;
echo $producto1->actualizarStock($cantidad);

//5. Realizar un echo del objeto Tienda creado en 2.
echo $objTienda->realizarVenta($arregloAsociativo);
