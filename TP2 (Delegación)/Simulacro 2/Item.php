<?php

// En la clase item:
// 1. Se registra la siguiente información: cantidad vendida y la referencia al producto.💚
// 2. El método constructor debe recibir como parámetros los valores iniciales para los atributos de la clase.💚
// 3. Definir los métodos de acceso para cada una de las variables instancias de la clase.💚
// 4. Redefinir el método _toString para que retorne la información de los atributos de la clase.💚
class Item
{

    private $cantidadVendida;
    private $referenciaProducto;

    public function __construct($cantidadVendida, $referenciaProducto)
    {
        $this->cantidadVendida = $cantidadVendida;
        $this->referenciaProducto = $referenciaProducto;
    }


    /**
     * Get the value of cantidadVendida
     */
    public function getCantidadVendida()
    {
        return $this->cantidadVendida;
    }

    /**
     * Set the value of cantidadVendida
     *
     * @return  self
     */
    public function setCantidadVendida($cantidadVendida)
    {
        $this->cantidadVendida = $cantidadVendida;

        return $this;
    }

    /**
     * Get the value of referenciaProducto
     */
    public function getReferenciaProducto()
    {
        return $this->referenciaProducto;
    }

    /**
     * Set the value of referenciaProducto
     *
     * @return  self
     */
    public function setReferenciaProducto($referenciaProducto)
    {
        $this->referenciaProducto = $referenciaProducto;

        return $this;
    }


    public function __toString()
    {
        $rta = "";
        $rta = "\nCantidad vendidad: " . $this->getCantidadVendida();
        $rta .= "\nReferencia del producto: " . $this->getReferenciaProducto();
        return $rta;
    }
}
