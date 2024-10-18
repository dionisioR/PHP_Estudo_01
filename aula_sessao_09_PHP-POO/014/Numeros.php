<?php
class Numero{
    private $numero;
    public function __construct($numero){
        $this->numero = $numero;
    }
    public function getNumero(){
        return $this->numero;
    }
    public function par_ou_impar(){
        return $this->numero % 2 == 0 ? 'PAR' : 'ÍMPAR';
    }

    public function tabuada(){

        $resultado = [];
        for($i = 1; $i <= 10; $i++){
            $resultado[] = $this->numero . ' x ' . $i . ' = ' . $this->numero * $i;
        }
        return $resultado;
    }

    public function raiz_quadrada(){
        return sqrt($this->numero);
    }
}