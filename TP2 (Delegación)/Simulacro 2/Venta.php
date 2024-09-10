<?php

// En la clase Venta:
// 1. Se registra la siguiente información: fecha, denominación del cliente, numero de factura, tipo de comprobante (Tipo A o B) y la colección de items vendidos.💚}
// 2. El método constructor debe recibir como parámetros los valores iniciales para los atributos.💚
// 3. Definir los métodos de acceso de cada uno de los atributos de la clase}💚
// 4. Redefinir el método _toString para que retorne la información de los atributos de la clase.💚
// 5. Implementar el método incorporarProducto que recibe por parámetro un producto y la cantidad que desea registrarse en la venta. Si es posible realizar la venta, teniendo en cuenta la cantidad solicitada y la cantidad en stock del producto, se crea un item y se incorpora a la colección de items de la venta. Recordar que debe actualizarse el stock del producto si la venta se realiza con éxito. El método debe retornar verdadero en caso para el caso que se pueda incorporar el producto para vender o falso en caso contrario.

class Venta
{
    private $fecha;
    private $denominacionCliente;
    private $numeroFactura;
    private $tipoComprobante; //(Tipo A o B) 
    private $colItemsVendidos;

    public function __construct($fecha, $denominacionCliente, $numeroFactura, $tipoComprobante, $colItemsVendidos)
    {
        $this->fecha = $fecha;
        $this->denominacionCliente = $denominacionCliente;
        $this->numeroFactura = $numeroFactura;
        $this->tipoComprobante = $tipoComprobante;
        $this->colItemsVendidos = $colItemsVendidos;
    }

    /**
     * Get the value of fecha
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set the value of fecha
     *
     * @return  self
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get the value of denominacionCliente
     */
    public function getDenominacionCliente()
    {
        return $this->denominacionCliente;
    }

    /**
     * Set the value of denominacionCliente
     *
     * @return  self
     */
    public function setDenominacionCliente($denominacionCliente)
    {
        $this->denominacionCliente = $denominacionCliente;

        return $this;
    }

    /**
     * Get the value of numeroFactura
     */
    public function getNumeroFactura()
    {
        return $this->numeroFactura;
    }

    /**
     * Set the value of numeroFactura
     *
     * @return  self
     */
    public function setNumeroFactura($numeroFactura)
    {
        $this->numeroFactura = $numeroFactura;

        return $this;
    }

    /**
     * Get the value of tipoComprobante
     */
    public function getTipoComprobante()
    {
        return $this->tipoComprobante;
    }

    /**
     * Set the value of tipoComprobante
     *
     * @return  self
     */
    public function setTipoComprobante($tipoComprobante)
    {
        $this->tipoComprobante = $tipoComprobante;

        return $this;
    }

    /**
     * Get the value of colItemsVendidos
     */
    public function getColItemsVendidos()
    {
        return $this->colItemsVendidos;
    }

    /**
     * Set the value of colItemsVendidos
     *
     * @return  self
     */
    public function setColItemsVendidos($colItemsVendidos)
    {
        $this->colItemsVendidos = $colItemsVendidos;

        return $this;
    }
    /**
     * 5. Implementar el método incorporarProducto que recibe por parámetro un producto y la cantidad que desea registrarse en la venta. 
     * Si es posible realizar la venta, teniendo en cuenta la cantidad solicitada y la cantidad en stock del producto, se crea un item y se incorpora a la colección de items de la venta. Recordar que debe actualizarse el stock del producto si la venta se realiza con éxito. El método debe retornar verdadero en caso para el caso que se pueda incorporar el producto para vender o falso en caso contrario.
     */
    public function incorporarProducto($objProducto, $cantidad)
    {
        $vendido = False;
        if ($objProducto <> null && $cantidad <= $objProducto->getCantidadStock()) {
            $objItem = new Item($cantidad, $objProducto);
            $itemsVendidos = $this->getColItemsVendidos(); // Obtener el arreglo existente
            $itemsVendidos[] = $objItem; // Agregar el nuevo elemento al arreglo
            $this->setColItemsVendidos($itemsVendidos); // Actualizar el arreglo en el objeto
            $vendido = true;
        }

        return $vendido;
    }



    /**
     * Devuelve la colección en string 
     */
    public function getStringColItemsVendidos()
    {
        $vendidos = $this->getColItemsVendidos();
        $listadoItems = "";
        $respuesta = "";
        for ($i = 0; $i < count($vendidos); $i++) {
            $items = $vendidos[$i];
            $listadoItems .= $items . "\n";
        }
        $respuesta .= $listadoItems;

        return $respuesta;
    }

    public function __toString()
    {
        $rta = "";
        $rta .= "\nFecha :" . $this->getFecha();
        $rta .= "\nDenominacion del Cliente: " . $this->getDenominacionCliente();
        $rta .= "\nNumero de Factura: " . $this->getNumeroFactura();
        $rta .= "\nTipo de Comprobante: " . $this->getTipoComprobante();
        $rta .= "\nColeccion de items vendidos:" . $this->getStringColItemsVendidos(); // metodo que devuelva la coleccion. 
        return $rta;
    }
}
