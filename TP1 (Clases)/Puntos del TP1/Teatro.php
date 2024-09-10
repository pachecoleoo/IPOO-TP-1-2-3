<?php

class Teatro
{
    private $funciones;

    public function __construct($funcion1, $funcion2, $funcion3, $funcion4)
    {
        $this->funciones = [
            "f1" => $funcion1,
            "f2" => $funcion2,
            "f3" => $funcion3,
            "f4" => $funcion4,
        ];
    }

    public function getFunciones()
    {
        return $this->funciones;
    }

    public function setFunciones($funciones)
    {
        $this->funciones = $funciones;
    }

    public function cambiarNombre($numero, $nuevoNombre)
    {
        $funciones = $this->getFunciones();
        $mensaje = "El nombre de la función $numero ha sido cambiado a $nuevoNombre.";
        switch ($numero) {
            case 1:
                $funciones['f1']['nombre'] = $nuevoNombre;
                break;
            case 2:
                $funciones['f2']['nombre'] = $nuevoNombre;
                break;
            case 3:
                $funciones['f3']['nombre'] = $nuevoNombre;
                break;
            case 4:
                $funciones['f4']['nombre'] = $nuevoNombre;
                break;
            default:
                $mensaje = "El número de función no es válido.";
        }

        $this->setFunciones($funciones);
        return $mensaje;
    }

    public function cambiarDireccion($numero, $direccion)
    {;
        $funciones = $this->getFunciones();
        $mensaje = "La direccion de la funcion n° $numero ha sido cambiado a $direccion.";
        switch ($numero) {
            case 1:
                $funciones['f1']['direccion'] = $direccion;
                break;
            case 2:
                $funciones['f2']['direccion'] = $direccion;
                break;
            case 3:
                $funciones['f3']['direccion'] = $direccion;
                break;
            case 4:
                $funciones['f4']['direccion'] = $direccion;
                break;
            default:
                $mensaje = "El número de función no es válido.";
        }

        $this->setFunciones($funciones);
        return $mensaje;
    }
    public function cambiarPrecio($numero, $precio)
    {
        $funciones = $this->getFunciones();
        $mensaje = "El precio de la funcion n° $numero ha sido cambiado a $precio.";

        switch ($numero) {
            case 1:
                $funciones['f1']['precio'] = $precio;
                break;
            case 2:
                $funciones['f2']['precio'] = $precio;
                break;
            case 3:
                $funciones['f3']['precio'] = $precio;
                break;
            case 4:
                $funciones['f4']['precio'] = $precio;
                break;
            default:
                $mensaje = "El número de función no es válido.";
        }

        $this->setFunciones($funciones);

        return $mensaje;
    }

    public function cambiarTeatro($numero, $teatro)
    {
        $funciones = $this->getFunciones();
        $mensaje = "La funcion n° $numero ha sido cambiado al teatro $teatro.";

        switch ($numero) {
            case 1:
                $funciones['f1']['teatro'] = $teatro;
                break;
            case 2:
                $funciones['f2']['teatro'] = $teatro;
                break;
            case 3:
                $funciones['f3']['teatro'] = $teatro;
                break;
            case 4:
                $funciones['f4']['teatro'] = $teatro;
                break;
            default:
                $mensaje = "El número de función no es válido.";
        }

        $this->setFunciones($funciones);

        return $mensaje;
    }

    public function __toString()
    {

        return print_r($this->getFunciones());
    }
}
