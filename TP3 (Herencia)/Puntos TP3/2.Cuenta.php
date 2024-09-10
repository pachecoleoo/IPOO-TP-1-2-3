<?php

// 2. Defina e implemente una clase “Cuenta” que contenga la información de una cuenta de un banco y haga referencia a su dueño. Tener en cuenta que las cuentas pueden ser de 2 tipos: Cuenta Corriente o Caja d Ahorro.
// Nota: La Cuenta Corriente se distingue de una Caja de Ahorro porque su dueño puede girar en descubierto. Es por ello que la clase Cuenta Corriente debe tener un atributo que determine el monto máximo para girar en descubierto.


class Cuenta
{
    private $saldoCuenta;
    private $numCuenta;
    private $tipoCuenta; //caja de ahorro o Cuenta corriente. 
    private $objCliente; //referencaDueño


    public function __construct($saldoCuenta, $numCuenta, $tipoCuenta, object $objCliente)
    {
        $this->saldoCuenta = $saldoCuenta;
        $this->numCuenta = $numCuenta;
        $this->tipoCuenta = $tipoCuenta;
        $this->objCliente = $objCliente;
    }

    /**
     * Get the value of saldoCuenta
     */
    public function getSaldoCuenta()
    {
        return $this->saldoCuenta;
    }

    /**
     * Set the value of saldoCuenta
     *
     * @return  self
     */
    public function setSaldoCuenta($value)
    {
        $this->saldoCuenta = $value;
    }

    /**
     * Get the value of numCuenta
     */
    public function getNumCuenta()
    {
        return $this->numCuenta;
    }

    /**
     * Set the value of numCuenta
     *
     * @return  self
     */
    public function setNumCuenta($numCuenta)
    {
        $this->numCuenta = $numCuenta;
    }

    /**
     * Get the value of tipoCuenta
     */
    public function getTipoCuenta()
    {
        return $this->tipoCuenta;
    }

    /**
     * Set the value of tipoCuenta
     *
     * @return  self
     */
    public function setTipoCuenta($tipoCuenta)
    {
        $this->tipoCuenta = $tipoCuenta;
    }

    /**
     * Get the value of objCliente
     */
    public function getObjCliente()
    {
        return $this->objCliente;
    }

    /**
     * Set the value of objCliente
     *
     * @return  self
     */
    public function setObjCliente($objCliente)
    {
        $this->objCliente = $objCliente;
    }

    // Implementar los siguientes métodos en la clase:
    // 1. saldoCuenta() : retorna el saldo de la cuenta.
    public function saldoCuenta()
    {
        $saldo = $this->getSaldoCuenta();
        return $saldo;
    }



    // 2. realizarDeposito(monto): permite realizar un depósito a la cuenta una cantidad “monto” de dinero.
    public function realizarDeposito($monto)
    {
        $ingreso =  $this->getSaldoCuenta() + $monto;
        $disponible = $this->setSaldoCuenta($ingreso);
        $rta = "Ahora tiene $disponible";
        return $rta;
    }



    // 3. realizarRetiro(monto): permite realizar un retiro de la cuenta por una cantidad “monto” de dinero
    public function realizarRetiro($monto)
    {
        if ($this->getSaldoCuenta() >= $monto) {
            $saldoActual =  $this->getSaldoCuenta() - $monto;
            $disponible =  $this->setSaldoCuenta($saldoActual);
            $msj = "Ahora tiene $disponible";
        } else $msj = "No hay dinero suficiente para retirar, ingrese otro monto";
        return $msj;
    }
    public function __toString()
    {
        $cadena = "";
        $cadena .= "\nNumero de CTA: " . $this->getNumCuenta();
        $cadena .= "\nSaldo: " . $this->getSaldoCuenta();
        $cadena .= "\nTipo de cuenta: " . $this->getTipoCuenta();
        $cadena .= "\nCliente: " . $this->getObjCliente();
        return $cadena;
    }
}
