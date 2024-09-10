<?php
/*
    Defina e implemente una clase “Cuenta” que contenga la información de una cuenta de un banco y haga referencia a su dueño. 
    
    Tener en cuenta que las cuentas pueden ser de 2 tipos: Cuenta Corriente o Caja de Ahorro.

    Nota: La Cuenta Corriente se distingue de una Caja de Ahorro porque su dueño puede girar en descubierto. Es por ello que la clase Cuenta Corriente debe tener un atributo que determine el monto máximo para girar en descubierto.
    
    Implementar los siguientes métodos en la clase:
    1.	saldoCuenta() : retorna el saldo de la cuenta.
    2.	realizarDeposito(monto): permite realizar un depósito a la cuenta una cantidad “monto” de dinero.
    3.	realizarRetiro(monto): permite realizar un retiro de la cuenta por una cantidad “monto” de dinero.
*/

/* Informacion de cuenta corriente y cuenta de caja de ahorro:

    La cuenta corriente y la caja de ahorro son dos tipos de cuentas bancarias que tienen diferencias significativas en su funcionamiento y características.

    Una cuenta corriente es una cuenta bancaria que permite al titular realizar múltiples operaciones financieras, como depósitos, retiros, transferencias y pagos, de manera frecuente y sin restricciones. Una de las características distintivas de una cuenta corriente es la posibilidad de girar en descubierto, lo que significa que el titular puede retirar más dinero del que tiene disponible en la cuenta, entrando así en saldo negativo. Esto puede ser útil en situaciones en las que se necesita hacer un pago urgente y no se tiene suficiente saldo en la cuenta en ese momento.

    Por otro lado, una caja de ahorro es una cuenta diseñada principalmente para ahorrar dinero, por lo que generalmente no ofrece la posibilidad de girar en descubierto. Los titulares de una caja de ahorro suelen ganar intereses sobre el saldo depositado en la cuenta, lo que la hace atractiva para quienes desean guardar dinero a largo plazo.

    Ahora, en relación a lo que mencionas sobre el atributo que determina el monto máximo para girar en descubierto en una cuenta corriente, es una medida de control importante por parte del banco para evitar que los titulares incurran en deudas excesivas. Este atributo establece el límite máximo de dinero que el titular puede retirar más allá de su saldo disponible. Si el titular intenta retirar más dinero del permitido por este límite, la transacción será rechazada o se le cobrarán comisiones por sobregiro.

    resumen:
        En resumen, la diferencia clave entre una cuenta corriente y una caja de ahorro radica en la flexibilidad y las opciones de transacción que ofrece cada una, siendo la posibilidad de girar en descubierto una de las características distintivas de la cuenta corriente, y el atributo del monto máximo para girar en descubierto es una medida de control para evitar abusos financieros.
*/

/* ejemplo de hacer girar descubierto:
    aquí tienes un ejemplo de cómo funciona girar en descubierto en una cuenta corriente:

    Imagina que tienes una cuenta corriente con un saldo disponible de $100. Sin embargo, necesitas hacer una compra urgente de $150. Como tu saldo disponible es menor que el monto que necesitas, decides hacer la compra utilizando la opción de girar en descubierto.

    Al hacer la compra de $150, tu saldo en la cuenta quedará en -$50, lo que significa que has excedido tu saldo disponible en $50. Este saldo negativo es lo que se conoce como descubierto o sobregiro.

    El banco te permitió realizar la compra a pesar de no tener suficientes fondos, pero ten en cuenta que esto normalmente viene con un costo. Por lo general, el banco cobrará una comisión por sobregiro, que es una tarifa adicional por utilizar más dinero del que tenías disponible en tu cuenta.

    Entonces, girar en descubierto puede ser útil en situaciones de emergencia o cuando necesitas hacer un pago urgente y no tienes suficiente saldo en tu cuenta, pero es importante tener en cuenta las tarifas y los intereses asociados con esta opción, ya que puede resultar costoso si no se gestiona adecuadamente.
*/

class Cuenta{

    private $nroCuenta;
    private $saldo;
    private $objCliente;

	public function __construct($nroCuenta, $saldo, $objCliente) {

		$this->nroCuenta = $nroCuenta;
        $this->saldo = $saldo;
		$this->objCliente = $objCliente;
	}

	public function getNroCuenta() {
		return $this->nroCuenta;
	}

    public function getSaldo() {
		return $this->saldo;
	}

	public function getObjCliente() {
		return $this->objCliente;
	}

	public function setNroCuenta($value) {
		$this->nroCuenta = $value;
	}

    public function setSaldo($value) {
		$this->saldo = $value;
	}

	public function setObjCliente($value) {
		$this->objCliente = $value;
	}

    public function __toString(){
        
        $info = "Nro de Cuenta: " . $this->getNroCuenta() . "\n";
        $info .= "Saldo: " . $this->getSaldo() . "\n";
        $info .= $this->getObjCliente();

        return $info;
    }

    // saldoCuenta() : retorna el saldo de la cuenta.
    public function saldoCuenta(){

        $saldo = $this->getSaldo();

        return $saldo;

    }

    //realizarDeposito(monto): permite realizar un deposito a la cuenta una cantidad "monto" de dinero.
    public function realizarDeposito($monto){
        
        $acum = $this->getSaldo();

        if($monto > 0){
            $acum += $monto;
            $this->setSaldo($acum); // se actualiza el nuevo saldo a la cuenta
        }

    }

    //realizarRetiro($monto): permite realizar un retiro de la cuenta por una cantidad "monto" de dinero.
    public function realizarRetiro($monto){

        $saldo = $this->getSaldo();
        $cal = $saldo;

        if($saldo >= $monto){
            $cal -= $monto;
            $this->setSaldo($cal);
        }

    }

}
?>