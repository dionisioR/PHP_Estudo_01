<?php
//  O QUE SÃO TRAITS E COMO UTILIZAR

trait movimentos{
    public function iniciar(){
        echo 'Estou andando';
    }
    public function parar(){
        echo 'Estou parando';
    }
    public function saltar(){
        echo 'Estou saltando';
    }
}

trait movimentos_de_voo{
    public function voar(){
        echo 'Estou voando';
    }
    public function pousar(){
        echo 'Estou pousando';
    }
}

class Ser_Vivo{
    public $nome;
    public $especie;
    public $peso;
}

class Humano extends Ser_Vivo{
    use movimentos;
}

class Leao extends Ser_Vivo{
    use movimentos;
}

class Passaro extends Ser_Vivo{
    use movimentos, movimentos_de_voo;
}