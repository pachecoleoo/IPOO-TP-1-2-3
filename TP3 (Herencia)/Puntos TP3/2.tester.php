<?php
include_once '1.claseCliente.php';
include_once '2.ctaCajaAhorro.php';
include_once '2.ctaCorriente.php';
include_once '3.banco.php';

//clientes //objeto 
$ClienteA = new Cliente(41347641, "Leonardo", "Pacheco", 100);
$ClienteB = new Cliente(134641076, "Ricardo", "Pacheco", 200);
$Cliente3 = new Cliente(1122334, "Pepe", "Juarez", 300);
$Cliente4 = new Cliente(2233445, "Pedro", "Sanchez", 400);
$Cliente5 = new Cliente(1010101010, "popo", "chochco", 500);


//cuentas 
$cuenta1 = new CajaAhorro(0, 1, "Caja de ahorro", $ClienteA);
$cuenta2 = new CajaAhorro(0, 2, "Caja de ahorro", $ClienteB);
$cuenta3 = new CajaAhorro(0, 3, "Caja de ahorro", $ClienteB);
$cuenta4 = new CuentaCorriente(1000, 5, "Cuenta Corriente", $ClienteA, 10000);
$cuenta5 = new CuentaCorriente(1000, 4, "Cuenta Corriente", $ClienteB, 1000);

$colCliente = [$ClienteA, $ClienteB];
$colCuentas = [$cuenta1, $cuenta2, $cuenta3, $cuenta4, $cuenta5];


$banco = new Banco($colCuentas, "Numero Asignado", $colCliente);

// $banco->incorporarCliente($Cliente5);
// $banco->incorporarCuentaCorriente(300, 90000);
// $banco->incorporarCajaAhorro(100);
$cuenta1->realizarDeposito(300);
$cuenta2->realizarDeposito(300);
$cuenta3->realizarDeposito(300);
$cuenta1->$banco->realizarDeposito(2, 150);
echo $banco;
// 5. Implemente una clase TestBanco que realice las siguientes operaciones:
// 1. Crear un objeto de la clase Banco.
// 2. Crear dos nuevos clientes Cliente1 y Cliente2, y agregarlos al banco.
// 3. Crear dos Cuentas Corrientes, una asociada al cliente A y otra al cliente B, y agregarlas al Banco .
// 4. Crear tres Cajas de Ahorro, dos asociadas al cliente A y una asociada al cliente B, y agregarlas al Banco .
// 5. Depositar $300 en cada una de las Cajas de Ahorro.
// 6. Transferir $150 de la Cuenta Corriente de Cliente1, a la Caja de Ahorro de Cliente2.
// 7. Mostrar los datos de todas las cuentas.