<?php

include_once '2.ctaCajaAhorro.php';
include_once '2.ctaCorriente.php';
include_once '2.Cuenta.php';
// 3) Defina una clase Banco con las siguiente variables instancias:
// 1. coleccionCuentaCorriente: variable que contiene una colección de instancias de la clase Cuentas Corrientes.🟢
// 2. coleccionCajaAhorro: variable que contiene una colección de instancias de la clase Caja de Ahorro .🟢
// 3. ultimoValorCuentaAsignado: variable que contiene el ultimo valor asignado a una cuenta del banco. 🔴
// 4. coleccionCliente: variable que contiene una colección de instancias de la clase Cliente 🟢

// 4). En la clase Banco defina e implemente los siguientes métodos:
// 1. incorporarCliente(objCliente): permite agregar un nuevo cliente al Banco🟢
// 2. incorporarCuentaCorriente(numeroCliente, montoDescubierto): Agregar una nueva
// Cuenta a la colección de cuentas, verificando que el cliente dueño de la cuenta es cliente
// del Banco.🟢
// 3. incorporarCajaAhorro(numeroCliente):Agregar una nueva Caja de Ahorro a la colección de cajas
// de ahorro, verificando que el cliente dueño de la cuenta es cliente del Banco. 🟢
// 4. realizarDeposito(numCuenta,monto): Dado un número de Cuenta y un monto, realizar depósito.🟢
// 5. realizarRetiro(numCuenta,monto): Dado un número de Cuenta y un monto, realizar retiro.

class Banco
{

    private $colCuentas;
    private $ultimoValorAsignado;
    private $colClientes;

    public function __construct(array $colCuentas, $ultimoValorAsignado, array $colClientes)
    {
        $this->colCuentas = $colCuentas;
        $this->ultimoValorAsignado = $ultimoValorAsignado;
        $this->colClientes = $colClientes;
    }


    /**
     * Get the value of colClientes
     */
    public function getColClientes()
    {
        return $this->colClientes;
    }

    /**
     * Set the value of colClientes
     *
     * @return  self
     */
    public function setColClientes($colClientes)
    {
        $this->colClientes = $colClientes;
    }

    /**
     * Get the value of ultimoValorAsignado
     */
    public function getUltimoValorAsignado()
    {
        return $this->ultimoValorAsignado;
    }

    /**
     * Set the value of ultimoValorAsignado
     *
     * @return  self
     */
    public function setUltimoValorAsignado($ultimoValorAsignado)
    {
        $this->ultimoValorAsignado = $ultimoValorAsignado;
    }

    public function setColCuentas($colCuentas)
    {
        $this->colCuentas = $colCuentas;
    }
    public function getColCuentas()
    {
        return $this->colCuentas;
    }


    // 1. incorporarCliente(objCliente): permite agregar un nuevo cliente al Banco
    public function incorporarCliente($objCliente)
    {
        $clientes = $this->getColClientes();
        $clientes[] = $objCliente;
        $this->setColClientes($clientes);
    }

    //     2. incorporarCuentaCorriente(numeroCliente, montoDescubierto): Agregar una nueva
    // Cuenta a la colección de cuentas, verificando que el cliente dueño de la cuenta es cliente

    public function incorporarCuentaCorriente($numeroCliente, $montoDescubierto)
    {
        //verifico 

        $clientes =  $this->getColClientes();
        $clientesTotal = count($this->getColClientes());
        $encontrado = false;
        $i = 0;
        while ($i < $clientesTotal && !$encontrado) {


            $cliente = $clientes[$i];
            $num = $cliente->getNumCliente();

            if ($num == $numeroCliente) {
                $encontrado = true;

                $numeroCuenta = 1 + count($this->getColCuentas());

                $cuentaNueva =  new CuentaCorriente(0, $numeroCuenta, "Cuenta Corriente NUEVA✨", $cliente, $montoDescubierto);

                $cuentasTotal = $this->getColCuentas();
                $cuentasTotal[] = $cuentaNueva;
                $this->setColCuentas($cuentasTotal);
            }

            $i++;
        }
    }


    //3. incorporarCajaAhorro(numeroCliente):Agregar una nueva Caja de Ahorro a la colección de cajas
    // de ahorro, verificando que el cliente dueño de la cuenta es cliente del Banco.

    public function incorporarCajaAhorro($numeroCliente)
    {
        $clientes = $this->getColClientes();
        $clientesTotal = count($this->getColClientes());
        $i = 0;
        $encontrado = false;
        while ($i < $clientesTotal && !$encontrado) {

            $cliente = $clientes[$i];
            $num = $cliente->getNumCliente();

            if ($numeroCliente == $num) {
                $encontrado = true;
                $numeroCuenta = 1 + $clientesTotal;

                $cuentaAhorro = new CajaAhorro(0, $numeroCuenta, "NEW CAJA AHORRO🌟", $cliente);

                $cuentas = $this->getColCuentas();
                $cuentas[] = $cuentaAhorro;
                $this->setColCuentas($cuentas);
            }
        }
        $i++;
    }



    //4. realizarDeposito(numCuenta,monto): Dado un número de Cuenta y un monto, realizar depósito.
    public function realizarDeposito($numCuenta, $monto)
    {
        $cuentas = $this->getColCuentas();
        $cuentasTotal = count($this->getColCuentas());
        $i = 0;
        $encontrado = false;
        while ($i < $cuentasTotal && !$encontrado) {

            $cuenta = $cuentas[$i];
            $numeroCuenta = $cuenta->getNumCuenta();

            if ($numCuenta == $numeroCuenta) {
                $encontrado = true;

                $cuenta->realizarDeposito($monto);
            }

            $i++;
        }
    }



    //5. realizarRetiro(numCuenta,monto): Dado un número de Cuenta y un monto, realizar retiro.

    public function realizarRetiro($numCuenta, $monto)
    {
        $cuentas = $this->getColCuentas();
        $cuentasTotales = count($this->getColCuentas());
        $i = 0;
        $encontrado = false;


        while ($i < $cuentasTotales && !$encontrado) {
            $cuenta = $cuentas[$i];
            $numeroCuenta = $cuenta->getNumCuenta();

            if ($numCuenta == $numeroCuenta) {
                $encontrado = true;
                $cuenta->realizarRetiro($monto);
            }
            $i++;
        }
    }


    public function conversionArray($array)
    {
        $lista = "";
        foreach ($array as $atributo) {
            $lista .= $atributo . "\n";
        }

        return $lista;
    }



    public function __toString()
    {
        $cadena = "";
        $cadena .= "Coleccion de cajas Cuentas 🤑: \n"  . $this->conversionArray($this->getColCuentas());
        $cadena .= $this->getUltimoValorAsignado();
        $cadena .= "\nColeccion de clientes 🕴🏻: \n" . $this->conversionArray($this->getColClientes()) . "\n";
        return $cadena;
    }
}
