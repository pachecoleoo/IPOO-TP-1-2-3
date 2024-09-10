<?php

class Lectura
{

    private $objLibro;
    private $numPagina;
    public function __construct($arrayLibros, $numPagina)
    {
        $this->objLibro = $arrayLibros; //coleccion de libros
        $this->numPagina = $numPagina; //paginas del libro 
    }

    public function getObjLibro()
    {
        return $this->objLibro;
    }

    public function setObjLibro($objLibro)
    {
        $this->objLibro = $objLibro;
    }

    public function getNumPagina()
    {
        return $this->numPagina;
    }

    public function setNumPagina($numPagina)
    {
        $this->numPagina = $numPagina;
    }



    public function siguientePag()
    {
        $this->setNumPagina($this->getNumPagina() + 1);

        return "\n⏩Sig pag:  " . $this->getNumPagina();
    }

    public function anteriorPag()
    {
        $this->setNumPagina($this->getNumPagina() - 1);
        return "\n⏪ Anterior pag: " . $this->getNumPagina();
    }

    public function irAPag($pag)
    {
        $this->setNumPagina($pag);
        return  "\nAhora estoy en la pag: " . $this->getNumPagina();
    }



    public function libroLeido($libro)
    {
        $librosLeidos = false;
        $numLibros = count($this->getObjLibro());
        $i = 0;

        while ($i < $numLibros && $librosLeidos <> true) {
            $biblioteca = $this->getObjLibro()[$i];
            if ($biblioteca->getTitulo() == $libro) {
                $librosLeidos = True;
            }
            $i++;
        }

        return $librosLeidos;
    }
    public function leidosAnioEdicion($libro, $x)
    {
        $leido = $this->libroLeido($libro);
        $numLibros = count($this->getObjLibro());
        $i = 0;
        $rta = "El libro no ha sido leido";
        if ($leido) {
            $rta = "\n El libro $libro ha sido leido, pero no coincide con el año de edicion";
            while ($i < $numLibros) {
                $biblioteca = $this->getObjLibro()[$i];
                if (($biblioteca->getAnioDeEdicion() == $x) && ($biblioteca->getTitulo() == $libro)) {
                    $rta = "\n El libro $libro ha sido leído y coincide con el año de edición $x\n";
                }
                $i++;
            }
        }

        return $rta;
    }
    public function darSinopsis($titulo)
    {
        $coincide = False;
        $numLibros = count($this->getObjLibro());
        $i = 0;
        while ($i < $numLibros && $coincide <> true) {
            $libro = $this->getObjLibro()[$i];
            if ($libro->getTitulo() == $titulo) {
                $coincide = true;
                $rta = "\nSinaspsis de $titulo: " . $libro->getSinapsis();
            } else {
                $rta = "\nEl titulo del libro no coincide";
            }
            $i++;
        }

        return $rta;
    }

    /**
     * d) darLibrosPorAutor($nombreAutor): retorna todos aquellos libros que fueron leídos y el nombre de su autor coincide con el recibido por parámetro.
     */
    public function  darLibrosPorAutor($nombreAutor)
    {
        $biblioteca = $this->getObjLibro();
        $librosCoinciden = [];

        foreach ($biblioteca as $libro) {
            $autor = $libro->getObjAutor();
            if ($autor == $nombreAutor) {
                $librosCoinciden[] = $libro->getTitulo();
            }
        }

        $numLibros = count($librosCoinciden);
        $rta = "";

        if ($numLibros > 0) {
            $rta = "Los libros que coinciden son: ";
            for ($i = 0; $i < $numLibros; $i++) {
                $rta .= $librosCoinciden[$i];
                if ($i < $numLibros - 1) {
                    $rta .= ", ";
                }
            }
        } else {
            $rta = "No se encontraron libros del autor '$nombreAutor'.";
        }
        return $rta;
    }



    public function __toString()
    {
        $respuesta = "La lista de libros son:";
        foreach ($this->getObjLibro() as $libro) {
            $respuesta .= "\n_______________________________________________\n";
            $respuesta .= "Titulo del Libro: " . $libro->getTitulo() . "\n";
            $respuesta .= "Año de edicion: " . $libro->getAnioDeEdicion() . "\n";
            $respuesta .= "Paginas del Libro: " . $libro->getPaginas() . "\n";
            $respuesta .= "Autor del Libro: " . $libro->getObjAutor() . "\n";
            $respuesta .= "Editorial: " . $libro->getEditorial() . "\n";
            $respuesta .= "Sinapsis : " . $libro->getSinapsis() . "\n";
        }
        $respuesta .= "\nEstoy en la pagina: " . $this->getNumPagina();


        return $respuesta;
    }
}
