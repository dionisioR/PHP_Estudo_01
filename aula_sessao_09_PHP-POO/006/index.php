<?php
// Sobrescrita - Sobreposição de métodos herdados

/*
 O conceito de 'sobrescrita' é uma tradução simples de um outro conceito mais conhecido como 'override'.
 Na prática significa que podemos ter uma classe 'Mãe' onde um determinado método é definido e podemos alterar o seu código dentro de uma classe 'filha'.
 */

class Pessoa
{
    public $nome;
    public function identificacao()
    {
        echo "Meu nome é {$this->nome}.<br>";
        echo "Este método é da classe MÃE!!!";
    }
}

class Cliente extends Pessoa
{
    public function identificacao()
    {
        echo "Meu nome é {$this->nome}.<br>";
        echo "Este método é da classe FILHA!!!";
    }
}

// Vamos instanciar os objetos
$pessoa = new Pessoa();
$pessoa->nome = 'Anna';
$pessoa->identificacao();
echo '<br>';

$cliente = new Cliente();
$cliente->nome = 'João';
$cliente->identificacao();

