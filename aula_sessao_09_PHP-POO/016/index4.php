<?php 

// Declaração STRICT TYPES

declare(strict_types=1);

class Pessoa{
    public String $nome;
    public int $idade;
    public String $profissao;
    public float $salario;

    public function dados():String{
        return "Nome: $this->nome, Idade: $this->idade, Profissão: $this->profissao, Salário: $this->salario";
    }

}

$pessoa = new Pessoa();
$pessoa->nome = "João";
$pessoa->idade = 30;
$pessoa->profissao = "Programador";
$pessoa->salario = 5000.00;
echo $pessoa->dados();
echo "<br>";
