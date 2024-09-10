<?php
// En la clase Producto:
// 1. Se registra la siguiente información: código barra, nombre, marca, color, talle, descripción y cantidad en
// stock.💚
// 2. El método constructor debe recibir como parámetros los valores iniciales para los atributos definidos en l clase 💚
// 3. Definir los métodos de acceso de cada uno de los atributos de la clase.💚 
// 4. Redefinir el método _toString para que retorne la información de los atributos de la clase.💚
// 5. Implementar el método actualizarStock que recibe por parámetro una cantidad y actualiza el valor del stock del producto según corresponda. Si el valor recibido por parámetro es >0, entonces se incrementa el stock y si el valor es <0 se decrementa el stock del producto. 💚
class Producto
{

    private $codigoBarra;
    private $nombre;
    private $marca;
    private $color;
    private $talle;
    private $descripcion;
    private $cantidadStock;

    public function __construct($codigoBarra, $nombre, $marca, $color, $talle, $descripcion, $cantidadStock)
    {
        $this->codigoBarra = $codigoBarra;
        $this->nombre = $nombre;
        $this->marca = $marca;
        $this->color = $color;
        $this->talle = $talle;
        $this->descripcion = $descripcion;
        $this->cantidadStock = $cantidadStock;
    }

    /**
     * Get the value of codigoBarra
     */
    public function getCodigoBarra()
    {
        return $this->codigoBarra;
    }

    /**
     * Set the value of codigoBarra
     *
     * @return  self
     */
    public function setCodigoBarra($codigoBarra)
    {
        $this->codigoBarra = $codigoBarra;

        return $this;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of marca
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     *
     * @return  self
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get the value of color
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of talle
     */
    public function getTalle()
    {
        return $this->talle;
    }

    /**
     * Set the value of talle
     *
     * @return  self
     */
    public function setTalle($talle)
    {
        $this->talle = $talle;

        return $this;
    }

    /**
     * Get the value of descripcion
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     *
     * @return  self
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get the value of cantidadStock
     */
    public function getCantidadStock()
    {
        return $this->cantidadStock;
    }

    /**
     * Set the value of cantidadStock
     *
     * @return  self
     */
    public function setCantidadStock($cantidadStock)
    {
        $this->cantidadStock = $cantidadStock;

        return $this;
    }
    /**
     * // 5. Implementar el método actualizarStock que recibe por parámetro una cantidad y actualiza el valor del stock del producto según corresponda. Si el valor recibido por parámetro es >0, entonces se incrementa el stock y si el valor es <0 se decrementa el stock del producto.
     */
    public function actualizarStock($cantidad)
    {
        if ($cantidad > 0) {
            $nuevoStock = $this->getCantidadStock() + $cantidad;
            $this->setCantidadStock($nuevoStock);
        } else {
            // Como $cantidad es negativo aquí, sumamos su valor para restarlo del stock actual
            $nuevoStock =  $this->getCantidadStock() + $cantidad;
            $this->setCantidadStock($nuevoStock);
        }

        return $this->getCantidadStock();
    }

    public function __toString()
    {
        $rta = "";
        $rta .= "\nCodigo Barra: " . $this->getCodigoBarra();
        $rta .= "\nNombre: " . $this->getNombre();
        $rta .= "\nMarca: " . $this->getMarca();
        $rta .= "\nColor" . $this->getColor();
        $rta .= "\nTalle: " . $this->getTalle();
        $rta .= "\nDescripcion: " . $this->getDescripcion();
        $rta .= "\nCantidad de Stock: " . $this->getCantidadStock();
        return $rta;
    }
}
