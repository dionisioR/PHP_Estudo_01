<?php

// COMO CHAMAR MÉTODO DE UMA CLASSE PAI

// Esta funcionalidade não está apenas destinada ao contrutor.
// Se quiseres criar um novo método dentro da classe filha e ainda assim quiseres executar o que está na implementação original, podes usar a expressão 'parent::'

// E isto aplica-se à chamada do método com o mesmo nome, como a métodos com outro nome.

class Veiculo{
    public $marca;

    public function apresentar(){
        echo 'Este é um veículo da marca '.$this->marca;
    }
    public function teste(){
        echo 'Teste';
    }
}

class Carro extends Veiculo{
    public function apresentar(){
        parent::apresentar();
        echo '<br>Chamei a função da classe pai e ainda adicionei código!';
    }
}

$carro = new Carro();
$carro->marca = 'Toyota';
$carro->apresentar();
echo '<br>';