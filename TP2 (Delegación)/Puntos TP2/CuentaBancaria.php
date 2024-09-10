<?php
// b) Realizar las modificaciones necesarias en la clase CuentaBancaria (Ejercicio 14 del TP1) para que en
// vez de contener como atributo el DNI del dueño de la cuenta tenga una referencia a las clase Persona.
class CuentaBancaria
{

    private $numCuenta;
    private $objPersona;
    private $saldoActual;
    private $interesAnual;

    public function __construct($numCuenta, Persona $objPersona, $saldoActual, $interesAnual)
    {
        $this->numCuenta = $numCuenta;
        $this->objPersona = $objPersona;
        $this->saldoActual = $saldoActual;
        $this->interesAnual = $interesAnual;
    }

    public function setNumCliente($numCuenta)
    {
        $this->numCuenta = $numCuenta;
    }
    public function getNumCliente()
    {
        return $this->numCuenta;
    }
    public function setObjPersona($objPersona)
    {
        $this->objPersona = $objPersona;
    }
    public function getObjPersona()
    {
        return $this->objPersona;
    }

    public function setSaldoActual($saldoActual)
    {
        $this->saldoActual = $saldoActual;
    }
    public function getSaldoActual()
    {
        return $this->saldoActual;
    }

    public function setInteresAnual($interesAnual)
    {
        $this->interesAnual = $interesAnual;
    }
    public function getInteresAnual()
    {
        return $this->interesAnual;
    }

    public function actualizarSaldo()
    {
        $numerito  = $this->getInteresAnual() / 365;
        $saldo = $this->getSaldoActual();
        for ($i = 1; 365 >= $i; $i++) {

            $saldo = $saldo * $numerito / 100 + $saldo; //interes acumulado 
        }
        $this->setInteresAnual($saldo);
        return $this->getInteresAnual();
    }

    public function depositar($cantidad)
    {
        $this->setSaldoActual($this->getSaldoActual() + $cantidad);

        return $this->getSaldoActual();
    }

    public function retirar($cantidad)
    {
        if ($cantidad > $this->getSaldoActual()) {
            $mensaje = "Fondos insuficientes";
        } else {
            $this->setSaldoActual($this->getSaldoActual() - $cantidad);
            $mensaje = "Extracción exitosa, actualmente le quedan" . $this->getSaldoActual();
        }

        return $mensaje;
    }
    public function __toString()
    {
        return "\nSu numero de cuenta es: " . $this->getNumCliente() /*"\nDNI: " . $this->getObjPersona()*/ . "\nSu cuenta bancaria tiene actualmente: \n" . $this->getSaldoActual() . "\nSu interes anual es de:" . $this->getInteresAnual();
    }
}
