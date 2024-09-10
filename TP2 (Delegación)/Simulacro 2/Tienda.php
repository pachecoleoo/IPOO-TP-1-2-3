<?php
// En la clase Tienda
// 1. Se registra la siguiente información: nombre, dirección, teléfono, la colección de productos y la colección de ventas realizadas.💚
// 2. El método constructor debe recibir como parámetros los valores iniciales para los atributos definidos en la clase.💚
// 3. Definir los métodos de acceso de cada uno de los atributos de la clase.💚
// 4. Redefinir el método toString para que retorne la información de los atributos de la clase.💚



class Tienda
{
    private $nombre;
    private $direccion;
    private $telefono;
    private $colProductos;
    private $colVentasRealizadas;

    public function __construct($nombre, $direccion, $telefono, $colProductos, $colVentasRealizadas)
    {
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
        $this->colProductos = $colProductos;
        $this->colVentasRealizadas = $colVentasRealizadas;
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
     * Get the value of direccion
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set the value of direccion
     *
     * @return  self
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get the value of telefono
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set the value of telefono
     *
     * @return  self
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get the value of colProductos
     */
    public function getColProductos()
    {
        return $this->colProductos;
    }

    /**
     * Set the value of colProductos
     *
     * @return  self
     */
    public function setColProductos($colProductos)
    {
        $this->colProductos = $colProductos;

        return $this;
    }

    /**
     * Get the value of colVentasRealizadas
     */
    public function getColVentasRealizadas()
    {
        return $this->colVentasRealizadas;
    }

    /**
     * Set the value of colVentasRealizadas
     *
     * @return  self
     */
    public function setColVentasRealizadas($colVentasRealizadas)
    {
        $this->colVentasRealizadas = $colVentasRealizadas;

        return $this;
    }
    /**    // 5. Implementar el método buscarProducto que dado un código de barra por parámetro, retorna la referencia a un objeto producto con ese código de barra. En caso de no encontrar el código de barra en la colección de productos retornar null.
     * 
     */
    public function buscarProducto($codigoBarra)
    {
        $productos = $this->getColProductos();
        $rta = null;
        for ($i = 0; $i < count($productos); $i++) {

            if ($productos[$i]->getCodigoBarra() == $codigoBarra) {
                $rta = $productos[$i]->getReferencia();
            }
        }
        return $rta;
    }

    // 6. Implementar el metodo realizarVenta que recibe por parámetro un arreglo asociativo con las siguientes claves:”codigoBarra” (código barra correspondiente a un producto) y “cantidad” (cantidad de ejemplares del producto que desea venderse). El procedimiento debe buscar los productos según el código de barra, verificar el stock disponible y realizar el registro de la venta en caso de ser posible. El procedimiento debe retornar un objeto Venta con los ítem correspondientes a aquellos producto que pudo vender. En la implementación del método deben utilizarse los siguientes métodos: buscarProducto , incorporarProducto, actualizarStock.
    /**
     * 
     */
    public function realizarVenta($arregloAsociativo)
    {
        $venta = new Venta(date("y-m-d"), null, null, null, []);

        for ($i = 0; $i < count($arregloAsociativo["codigoBarra"]); $i++) {
            $codigo = $arregloAsociativo["codigoBarra"][$i];
            $cantidad = $arregloAsociativo["cantidad"][$i];
            $objCorrespondido = $this->buscarProducto($codigo);
            $coleccionVentas = $this->getColVentasRealizadas();

            if ($venta->incorporarProducto($objCorrespondido, $cantidad)) {
                $objCorrespondido->actualizarStock($cantidad);
                $coleccionVentas[] = $venta;
            }
            $this->setColVentasRealizadas($coleccionVentas);
        }


        return $venta;
    }

    public function getStringColProductos()
    {
        $respuesta = "";
        $listaProductos = "";
        $productos = $this->getColProductos();
        for ($y = 0; $y < count($productos); $y++) {
            $producto = $productos[$y];
            $listaProductos .= $producto . "\n";
        }
        $respuesta .= $listaProductos;


        return $respuesta;
    }

    public function getStringColVentasRealizadas()
    {
        $ventas = $this->getColVentasRealizadas();
        $respuesta = "";
        $listaVentas = "";
        for ($p = 0; $p < count($ventas); $p++) {
            $venta = $ventas[$p];
            $listaVentas .= $venta . "\n";
        }
        $respuesta .= $listaVentas;

        return $respuesta;
    }
    public function __toString()
    {

        $rta = "";
        $rta .= "\nNombre: " . $this->getNombre();
        $rta .=  "\nDirección: " . $this->getDireccion();
        $rta .= "\nTeléfono: " . $this->getTelefono();
        $rta .= "\nColeccion de Productos: " . $this->getStringColProductos(); // metodo para obtener colección
        $rta .= "\nColección de ventas Realizadas: " . $this->getStringColVentasRealizadas(); // metodo para obtener coleccion;

        return $rta;
    }
}
