<?php

include_once '1.claseCliente.php';


function test_crear_cliente()
{
    $objCliente = new Cliente(41347641, "Leonardo", "Pacheco", 992200);
    echo $objCliente;
}

function main()
{
    test_crear_cliente();
}
main();
