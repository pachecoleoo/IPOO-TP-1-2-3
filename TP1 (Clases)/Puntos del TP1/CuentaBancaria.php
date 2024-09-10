<?php

class CuentaBancaria
{

    private $numCuenta;
    private $dniCliente;
    private $saldoActual;
    private $interesAnual;

    public function __construct($numCuenta, $dniCliente, $saldoActual, $interesAnual)
    {
        $this->numCuenta = $numCuenta;
        $this->dniCliente = $dniCliente;
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
    public function setDniCliente($dniCliente)
    {
        $this->dniCliente = $dniCliente;
    }
    public function getDniCliente()
    {
        return $this->dniCliente;
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
        for ($i = 1; 365 >= $i; $i++) {

            $this->setSaldoActual($this->getSaldoActual() * $numerito / 100 + $this->getSaldoActual()); //interes acumulado 
        }
        return $this->getSaldoActual();
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
        return "Su numero de cuenta es: " . $this->getNumCliente() . "\nDNI: " . $this->getDniCliente() . "\nSu cuenta bancaria tiene actualmente: \n" . $this->getSaldoActual();
    }
}
