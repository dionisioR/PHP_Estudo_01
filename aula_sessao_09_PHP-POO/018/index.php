<?php
// COMO CHAMAR O CONTRUTOR DE UMA CLASSE PAI

// Vamos ver o cenário em que temos uma classe de onde deriva outra classe

class Humano{
    public $nome;
    public $idade;

    public function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;

    }

}

class Funcionario extends Humano{
    public function __construct(){
        $this->idade = 22;
    }
}

$funcionario = new Funcionario();

/*
O problema aqui é que quando criamos uma instância da classe Funcionario, o construtor da
classe Humano não é chamado. Isso acontece porque o construtor da classe Funcionario sobrescreve
o construtor da classe Humano. 

Funcionario é uma classe que tem herança de Humano.
Mas como foi implementado um __construct na classe Funcionario, a herança 'esquece' a assinatura da classe pai e assume a implementação da classe filho.

O código é executado sem qualquer problema.
*/