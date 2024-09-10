<?php
/*
    Nota: La Cuenta Corriente se distingue de una Caja de Ahorro porque su dueño puede girar en descubierto. Es por ello que la clase Cuenta Corriente debe tener un atributo que determine el monto máximo para girar en descubierto.
    
    Implementar los siguientes métodos en la clase:
    1.	saldoCuenta() : retorna el saldo de la cuenta.
    2.	realizarDeposito(monto): permite realizar un depósito a la cuenta una cantidad “monto” de dinero.
    3.	realizarRetiro(monto): permite realizar un retiro de la cuenta por una cantidad “monto” de dinero.
*/

/* informacion a tener en cuenta de "girar en descubierto":
    Ahora, en relación a lo que mencionas sobre el atributo que determina el monto máximo para girar en descubierto en una cuenta corriente, es una medida de control importante por parte del banco para evitar que los titulares incurran en deudas excesivas. Este atributo establece el límite máximo de dinero que el titular puede retirar más allá de su saldo disponible. Si el titular intenta retirar más dinero del permitido por este límite, la transacción será rechazada o se le cobrarán comisiones por sobregiro.
*/

/* ejemplo de hacer girar descubierto:
    aquí tienes un ejemplo de cómo funciona girar en descubierto en una cuenta corriente:

    Imagina que tienes una cuenta corriente con un saldo disponible de $100. Sin embargo, necesitas hacer una compra urgente de $150. Como tu saldo disponible es menor que el monto que necesitas, decides hacer la compra utilizando la opción de girar en descubierto.

    Al hacer la compra de $150, tu saldo en la cuenta quedará en -$50, lo que significa que has excedido tu saldo disponible en $50. Este saldo negativo es lo que se conoce como descubierto o sobregiro.

    El banco te permitió realizar la compra a pesar de no tener suficientes fondos, pero ten en cuenta que esto normalmente viene con un costo. Por lo general, el banco cobrará una comisión por sobregiro, que es una tarifa adicional por utilizar más dinero del que tenías disponible en tu cuenta.

    Entonces, girar en descubierto puede ser útil en situaciones de emergencia o cuando necesitas hacer un pago urgente y no tienes suficiente saldo en tu cuenta, pero es importante tener en cuenta las tarifas y los intereses asociados con esta opción, ya que puede resultar costoso si no se gestiona adecuadamente.
*/

class CtaCorriente extends Cuenta
{

    // una medida de control para evitar abusos financieros
    private $montoMaximoDescubierto; // monto para girar en descubierto.

    public function __construct($nroCuenta, $saldo, $objDuenio, $montoMaximoDescubierto)
    {

        parent::__construct($nroCuenta, $saldo, $objDuenio);

        $this->montoMaximoDescubierto = $montoMaximoDescubierto;
    }

    // get---------------------------------------------
    public function getMontoMaximoDescubierto()
    {
        return $this->montoMaximoDescubierto;
    }

    // set---------------------------------------------------
    public function setMontoMaximoDescubierto($value)
    {
        $this->montoMaximoDescubierto = $value;
    }

    public function __toString()
    {

        $info = parent::__toString();
        $info .= "Monto Maximo: " . $this->getMontoMaximoDescubierto() . "\n";

        return $info;
    }

    public function realizarDeposito($monto)
    {

        parent::realizarDeposito($monto);
    }

    public function realizarRetiro($monto)
    {

        if ($monto > 0 && ($this->getSaldo() + $this->getMontoMaximoDescubierto() >= $monto)) {

            parent::realizarRetiro($monto);
        }
    }
}
