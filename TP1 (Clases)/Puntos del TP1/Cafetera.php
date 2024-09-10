<?php
class Cafetera
{

    private $capacidadMaxima;
    private $cantidadActual;

    public function __construct($capacidadMaxima, $cantidadActual)
    {
        $this->capacidadMaxima = $capacidadMaxima;
        $this->cantidadActual = $cantidadActual;
    }

    public function getCapacidadMaxima()
    {
        return $this->capacidadMaxima;
    }
    public function setCapacidadMaxima($capacidadMaxima)
    {

        $this->capacidadMaxima = $capacidadMaxima;
    }

    public function setCantidadActual($cantidadActual)
    {

        $this->cantidadActual = $cantidadActual;
    }

    public function getCantidadActual()
    {
        return $this->cantidadActual;
    }

    public function llenarCafetera()

    {
        $this->setCantidadActual($this->getCapacidadMaxima());
        return $this->getCantidadActual();
    }

    public function servirTaza($cantidad)
    {
        if ($cantidad <= $this->getCantidadActual()) {
            $this->setCantidadActual($this->getCantidadActual() - $cantidad);
            $mensaje = "Le servi una taza de $cantidad ml, ahora queda " . $this->getCantidadActual() . "ml de café.";
        } else {
            $cafeIncompleto = $cantidad - $this->getCantidadActual();
            while ($this->getCantidadActual() > 0) {
                $this->setCantidadActual($this->getCantidadActual() - 1);
            }
            $mensaje = "Ya serví lo que me quedaba del cafe me faltaron $cafeIncompleto ml para llenar la taza";
        }
        return $mensaje;
    }

    public function vaciarCafetera()
    {
        $this->setCantidadActual(0);
        return "\nVaciamos la cafetera ahora esta vacia";
    }

    public function agregarCafe($cantidad)
    {
        if ($cantidad > $this->getCapacidadMaxima()) {
            $this->setCantidadActual($this->getCapacidadMaxima());
            return "Llenamos la cafetera hasta el tope, más de eso no porque rebalsa.";
        } else {
            $this->setCantidadActual($this->getCantidadActual() + $cantidad);
        }
    }

    public function __toString()
    {
        return "\nCapacidad actual de la cafetera: " . $this->getCapacidadMaxima() . "ml ☕. \nCantidad actual de cafe de: " . $this->getCantidadActual() . " ml😋 \n";
    }
}
