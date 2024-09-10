<?php

class Reloj {
    private $hora;
    private $minuto;
    private $segundo; //atributos

    public function __construct($horas, $minutos, $segundos){
        $this->hora = $horas;
        $this->minuto = $minutos; //metodo constructor, crea los objetos
        $this->segundo = $segundos;
    }

    /**
     * Retorna el valor de las horas
     */
    public function gethora(){
        return $this->hora;
    }
    /**
     * Setea el valor de las horas
     */
    public function sethora($hora){
         $this->hora = $hora;
    }
    /**
     * Retorna el valor de los minutos
     */
    public function getminuto(){
        return $this->minuto;
    }
    
    /**
     * Setea el valor de los minutos
     */

    public function setminuto($minuto){
         $this->minuto = $minuto;
    }

    /**
     * Retorna el valor de los segundos
     */

    public function getsegundo(){
        return $this->segundo;
    }
    /**
     * Setea el valor de los segundos
     */
    public function setsegundo($segundo){
         $this->segundo = $segundo;

    }
    
    /**
     * metodo con los que se setean a cero los atributos
     */
    public function puesta_a_cero(){
            $this->sethora(00);
            $this->setminuto(00);
            $this->setsegundo(00);
        }
    /**
     * Funcion que va a incrementar horas min seg, cuando llegue a 23:59:59 pasará a 00:00:00
     */
    public function incrementar(){
        $valorHora= $this->gethora();
        $valorMinuto=$this->getminuto();
        $valorSegundo= $this->getsegundo();
        
        $valorSegundo++; 
        if( $valorSegundo <= 59){
            $this->setsegundo($valorSegundo);
        }else {
            $this->setsegundo(00);
            $valorMinuto++;    
        }
        if ($valorMinuto<=59){
            $this->setminuto($valorMinuto);
           
        }else {
            $this->setminuto(00);
            $valorHora++;
        }
        if ($valorHora<=23){
            $this->sethora($valorHora);
        }else{
            $this->sethora(00);
        }
    } 
    
    public function __toString(){
        return "{$this->gethora()} : {$this->getminuto()} : {$this->getsegundo()}";
    }
} 

//Genero el objeto reloj 

$reloj1 = new Reloj(23,59,57);
//invoco los metodos 
$reloj1-> incrementar();
echo "Mi primer aumento es: $reloj1 \n";
$reloj1-> incrementar();
echo "Mi segundo aumento es: $reloj1 \n";
$reloj1-> incrementar();
echo "Mi tercer aumento es: $reloj1 \n ";
$reloj1->puesta_a_cero();
echo "  Hora restablecida:".$reloj1;