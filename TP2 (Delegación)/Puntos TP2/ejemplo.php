<?php

class OperacionesMatematicas
{
    public function sumar($a, $b)
    {
        return $a + $b;
    }

    public function restar($a, $b)
    {
        return $a - $b;
    }
}

class Calculadora
{
    private $operacionesMatematicas;

    public function __construct()
    {
        $this->operacionesMatematicas = new OperacionesMatematicas();
    }

    public function sumar($a, $b)
    {
        return $this->operacionesMatematicas->sumar($a, $b);
    }

    public function restar($a, $b)
    {
        return $this->operacionesMatematicas->restar($a, $b);
    }
}

// Uso de la clase Calculadora
$calculadora = new Calculadora();
echo "Suma: " . $calculadora->sumar(5, 3) . "\n"; // Salida: Suma: 8
echo "Resta: " . $calculadora->restar(10, 4) . "\n"; // Salida: Resta: 6
