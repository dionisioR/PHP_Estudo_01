<?php
// COMO CHAMAR O CONTRUTOR DE UMA CLASSE PAI

// Vejamos agora como fazer para chamar o método __construct da classe pai

class Humano{
    public $nome;
    public $idade;

    public function __construct($nome){
        $this->nome = $nome;

    }

}

class Funcionario extends Humano{
    public function __construct($nome){
        parent::__construct($nome);
        $this->idade = 22;
    }
}

$funcionario = new Funcionario('Juca');
echo $funcionario->nome;
echo '<br>';
echo $funcionario->idade;

