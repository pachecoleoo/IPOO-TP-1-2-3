<?php

/* informacion a tener en cuenta de "caja de ahorro":
	Una caja de ahorro es una cuenta diseñada principalmente para ahorrar dinero, por lo que generalmente no ofrece la posibilidad de girar en descubierto. Los titulares de una caja de ahorro suelen ganar intereses sobre el saldo depositado en la cuenta, lo que la hace atractiva para quienes desean guardar dinero a largo plazo.
*/

class CajaDeAhorro extends Cuenta{

	public function __construct($nroCuenta, $saldo, $objDuenio) {

        parent::__construct($nroCuenta, $saldo, $objDuenio);

	}

	public function __toString(){
		
		$info = parent::__toString();

		return $info;
	}

	public function realizarDeposito($monto){
        
        parent::realizarDeposito($monto);

    }

	public function realizarRetiro($monto){

		parent::realizarRetiro($monto);

	}

}
?>