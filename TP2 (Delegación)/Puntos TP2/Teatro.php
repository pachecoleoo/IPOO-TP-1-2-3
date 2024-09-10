<?php


class Teatro
{
    private $funciones;
    private $nombreTeatro;

    public function __construct($nombreTeatro, array $colFunciones)
    {
        $this->funciones = $colFunciones;
        $this->nombreTeatro = $nombreTeatro;
    }

    public function getFunciones()
    {
        return $this->funciones;
    }

    public function setFunciones($funciones)
    {
        $this->funciones = $funciones;
    }
    // Volver a implementar las operaciones que permiten modificar el nombre y el precio de una función.
    public function cambiarNombre($nombre, $nuevoNombre)
    {
        $funciones = $this->getFunciones();
        for ($i = 0; $i < count($funciones); $i++) {
            if ($funciones[$i]->getNombre() == $nombre) {
                $funciones[$i]->setNombre($nuevoNombre);
            }
        }
    }

    // Volver a implementar las operaciones que permiten modificar el nombre y el precio de una función.
    public function cambiarPrecio($nombreFuncion, $precioNuevo)
    {
        $funciones = $this->getFunciones();
        for ($i = 0; $i < count($funciones); $i++) {
            if ($funciones[$i]->getNombre() == $nombreFuncion) {
                $funciones[$i]->setPrecio($precioNuevo);
            }
        }
    }



    public function compararHorario($horarioFuncion)
    {
        $funciones = $this->getFunciones();
        $rta = true;
        for ($i = 0; $i < count($funciones); $i++) {

            if ($funciones[$i]->getHorarioInicio() == $horarioFuncion) {
                $rta = false;
            }
        }

        return $rta;
    }
    // Luego implementar la operación que carga las funciones en un teatro especifico, solicitando por consola la información de las mismas. También se debe verificar que el horario de las funciones, no se solapen para un mismo teatro.
    public function agregarFuncion($agregarFuncion)
    {
        $funciones = $this->getFunciones();
        $agregado = false;
        for ($i = 0; $i < count($funciones); $i++) {
            $coinciden = $this->compararHorario($agregarFuncion->getHorarioInicio());

            if ($coinciden && !$agregado) {
                $funciones[] = $agregarFuncion;
                $this->setFunciones($funciones);
                $agregado = true;
            }
        }
    }


    public function mostrarArray($array)
    {
        $lista = "";

        foreach ($array as $atributo) {
            $lista .= $atributo . "\n";
        }
        return $lista;
    }

    public function __toString()
    {

        $funcionesLista = "Coleccion de funciones: \n" . $this->mostrarArray($this->getFunciones());
        return $funcionesLista;
    }

    /**
     * Get the value of nombreTeatro
     */
    public function getNombreTeatro()
    {
        return $this->nombreTeatro;
    }

    /**
     * Set the value of nombreTeatro
     *
     * @return  self
     */
    public function setNombreTeatro($nombreTeatro)
    {
        $this->nombreTeatro = $nombreTeatro;

        return $this;
    }
}
