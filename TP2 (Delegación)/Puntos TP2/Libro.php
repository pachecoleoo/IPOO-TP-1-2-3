<?php


class Libro
{
    private $ISBN;
    private $titulo;
    private $anioDeEdicion;
    private $editorial;
    private $objAutor;
    private $paginas;
    private $sinapsis;

    public function __construct($ISBN, $titulo, $anioDeEdicion, $editorial, Autor $objAutor, $paginas, $sinapsis)
    { //$this->getObjPersona()->getNombre()
        $this->ISBN = $ISBN;
        $this->titulo = $titulo;
        $this->anioDeEdicion = $anioDeEdicion;
        $this->editorial = $editorial;
        $this->objAutor = $objAutor;
        $this->paginas = $paginas;
        $this->sinapsis = $sinapsis;
    }

    public function getISBN()
    {
        return $this->ISBN;
    }
    public function setISBN($ISBN)
    {
        $this->ISBN = $ISBN;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }
    public function getAnioDeEdicion()
    {
        return $this->anioDeEdicion;
    }
    public function setAnioDeEdicion($anioDeEdicion)
    {
        $this->anioDeEdicion = $anioDeEdicion;
    }
    public function getEditorial()
    {
        return $this->editorial;
    }
    public function setEditorial($editorial)
    {
        $this->editorial = $editorial;
    }
    public function getObjAutor()
    {
        return $this->objAutor;
    }
    public function setObjAutor($objAutor)
    {
        $this->objAutor = $objAutor;
    }
    public function getSinapsis()
    {
        return $this->sinapsis;
    }
    public function setSinapsis($sinapsis)
    {
        $this->sinapsis = $sinapsis;
    }
    public function getPaginas()
    {
        return $this->paginas;
    }
    public function setpaginas($paginas)
    {
        $this->paginas = $paginas;
    }



    /**
     * Verifica si la cadena dada pertenece a la editorial del libro.
     *
     * @param string $perEditorial La editorial a verificar.
     * @return boolean Devuelve true si la cadena dada es igual a la editorial del libro, de lo contrario, devuelve false.
     */
    public function perteneceEditorial($perEditorial)
    {
        if ($perEditorial == $this->getEditorial()) {
            $respuesta = true;
        } else
            $respuesta = false;
        if ($respuesta) {
            $text = "Es la editorial ✅ ";
        } else {
            $text = "No es la editorial ❌";
        }
        return $text;
    }
    public function aniosDeEdicion()
    {
        $anioActual = date("Y");
        return "Han pasado: " . $anioActual - $this->getAnioDeEdicion() . " años de la ultima edicion. \n";
    }

    public function iguales($libroNombre, $arregloLibros)
    {
        if (in_array($libroNombre, $arregloLibros)) {
            $msj = "El libro '$libroNombre' ya está almacenado. ✅ ";
        } else {
            $msj = "El libro '$libroNombre' no está almacenado. ❌";
        }
        return $msj;
    }


    /**
     * @param array $arregloLibros
     * @param string $editorial 
     * @return array //devuelve el array de libros.
     */
    public function librosYEditoriales($arregloLibros, $editorial)
    {
        $librosFiltrados = [];

        foreach ($arregloLibros as $libro) {
            if ($libro['Editorial'] == $editorial) {
                $librosFiltrados[] = $libro;
            } else
                "\nNo se encontraron libros con la Editorial proporcionada";
        }


        return $librosFiltrados;
    }
    public function __toString()
    {
        $autor = $this->getObjAutor();
        return "ISBN: " . $this->getISBN() . "\n Titulo: " . $this->getTitulo() . "\nAño de edicion: " . $this->getAnioDeEdicion() . "\nEditorial: " . $this->getEditorial() . "\nNombre: " . $autor->getNombre() . "\nApellido del autor: " . $this->getObjAutor()->getApellido() . "\n" . "\nSinapsis: " . $this->getSinapsis() .  "\nLas paginas son: " . $this->getPaginas();
    }
}
