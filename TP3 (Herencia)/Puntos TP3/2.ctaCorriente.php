<?php
// Nota: La Cuenta Corriente se distingue de una Caja de Ahorro porque su dueño puede girar en descubierto. Es por ello que la clase Cuenta Corriente debe tener un atributo que determine el monto máximo para girar en descubierto.

include_once '2.Cuenta.php';
class CuentaCorriente extends Cuenta
{

    private $montoMaximo;

    public function __construct($saldoCuenta, $numCuenta, $tipoCuenta,  $objCliente, $montoMaximo)
    {

        parent::__construct($saldoCuenta, $numCuenta, $tipoCuenta, $objCliente);
        $this->montoMaximo = $montoMaximo;
    }

    /**
     * Get the value of montoMaximo
     */
    public function getMontoMaximo()
    {
        return $this->montoMaximo;
    }

    /**
     * Set the value of montoMaximo
     *
     * @return  self
     */
    public function setMontoMaximo($montoMaximo)
    {
        $this->montoMaximo = $montoMaximo;

        return $this;
    }

    public function realizarDeposito($monto)
    {
        parent::realizarDeposito($monto);
    }

    public function realizarRetiro($monto)
    {
        $saldo = $this->getSaldoCuenta();
        $montoMaximo = $this->getMontoMaximo();
        $nuevoSaldo =  $saldo + $montoMaximo;
        if ($monto <= $saldo) {
            parent::realizarRetiro($monto);
        } elseif ($monto <= $nuevoSaldo) {
            // Permitir el retiro incluso si el saldo es tnegativo (descubierto)
            $this->setSaldoCuenta($nuevoSaldo);
            parent::realizarRetiro($monto);
            $this->setMontoMaximo(0);
        } else {
            echo "Monto de retiro supera el límite permitido.";
        }
    }



    public function __toString()
    {
        $cadena = parent::__toString();
        $cadena .= "\nMonto maximo permitido de prestamo: " . $this->getMontoMaximo() . "🟢";
        return $cadena;
    }
}
