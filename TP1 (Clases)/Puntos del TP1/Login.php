<?php
/*
10.d. 
Implementar una clase Login nombreUsuario, contraseña, frase que permite recordar la contraseña ingresada,y las ultimas 4 contraseñas utilizadas. 
Implementar un método que permita validar una contraseña con la almacenada y un método para cambiar la contraseña actual por otra nueva, el sistema deja cambiar la contraseña siempre y cuando esta no haya sido usada recientemente (es 
decir no se encuentra dentro de las cuatro almacenadas). 
Implementar el  método recordar que dado el usuario, muestra la frase que permite recordar su contraseña.*/

class Login
{
    private $nombreUsuario;
    private $contrasenia;
    private $frase;
    private $historialContrasenias; //**tengo que recordar las ultimas cuatro contrasenias ingresadas (array)  */ 

    public function __construct($nombreUsuario, $contrasenia, $frase, $historialContrasenias)
    {
        $this->nombreUsuario = $nombreUsuario;
        $this->contrasenia = $contrasenia;
        $this->frase = $frase;
        $this->historialContrasenias = $historialContrasenias;
    }

    public function validarContrasenia($contrasenia)
    {
        do {
            if ($this->contrasenia == $contrasenia) {
                return   "✔ Su contraseña es valida";
            } else {
                echo  "❌ Su contraseña es invalida, vuelva a colocarla:";
                $contrasenia = trim(fgets(STDIN));
            }
        } while (true);
    }
    public function cambiarContrasenia($contrasenia)
    {
        do {
            if (!in_array($contrasenia, $this->historialContrasenias)) {
                $this->setcontrasenia($contrasenia);
                $this->historialContrasenias($contrasenia);
                echo "Contraseña cambiada con éxito ✔ \n";
                return;
            } else {
                echo "La contraseña debe ser distinta a las últimas 4 ❌.\n Vuelva a ingresarla: ";
                $contrasenia = trim(fgets(STDIN));
            }
        } while (true);
    }
    public function historialContrasenias($nuevaContrasenia)
    {
        $this->historialContrasenias[3] = $this->historialContrasenias[2];
        $this->historialContrasenias[2] = $this->historialContrasenias[1];
        $this->historialContrasenias[1] = $this->historialContrasenias[0];
        $this->historialContrasenias[0] = $nuevaContrasenia;
    }

    public function recordarXfrase($frase)
    {
        do {
            if ($frase == $this->getfrase()) {
                echo "La frase es correcta, su contrasñea es:" . $this->getcontrasenia();
                return;
            } else {
                echo "La frase es incorrecta, vuelva a colocarla:";
                $frase = trim(fgets(STDIN));
            }
        } while (true);
    }
    public function getnombreUsuario()
    {
        return $this->nombreUsuario;
    }

    public function setnombreUsuario($nombreUsuario)
    {
        $this->nombreUsuario = $nombreUsuario;
    }
    public function getcontrasenia()
    {
        return $this->contrasenia;
    }

    public function setcontrasenia($contrasenia)
    {
        $this->contrasenia = $contrasenia;
    }

    public function getfrase()
    {
        return $this->frase;
    }

    public function setfrase($frase)
    {
        $this->frase = $frase;
    }

    public function gethistorialContrasenias()
    {
        return $this->historialContrasenias;
    }

    public function sethistorialcontrasenias($ultimasCuatro)
    {
        $this->historialContrasenias = $ultimasCuatro;
    }

    public function __toString()
    {
    }
}
