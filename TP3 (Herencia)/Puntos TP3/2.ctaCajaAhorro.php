<?php
include '2.Cuenta.php';


class CajaAhorro extends Cuenta
{
    public function __construct($saldoCuenta, $numCuenta, $tipoCuenta, object $objCliente)
    {
        parent::__construct($saldoCuenta, $numCuenta, $tipoCuenta, $objCliente);
    }
    // se puede usar como no.
    public function realizarDeposito($monto)
    {
        parent::realizarDeposito($monto);
    }

    public function realizarRetiro($monto)
    {
        parent::realizarRetiro($monto);
    }
    public function __toString()
    {
        $cadena = parent::__toString();
        return $cadena;
    }
}
