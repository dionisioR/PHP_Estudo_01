<?php
/*
ACCESS MODIFIERS

Já vimos que as classes podem ter PROPRIEDADES (variáveis da classe) e MÉTODOS (funções da classe).

As PROPRIEDADES e os MÉTODOS podem ter níveis de acesso distintos que permitem controlar a que nível
podemos ter acesso a eles ou não.

PUBLIC - a propriedade ou método pode se acessada a partir de qualquer lado. É o modificador padrão.
PROTECTED - a propriedade ou método pode ser acessada dentro da classe e dentro da classe derivada dela.
PRIVATE - a propriedade ou método só pode ser acessado dentro da classe.
    
*/

class Homem{
    public $nome;
    protected $idade;
    private $peso;
}

// instanciando um objeto
$homem = new Homem();

// Agora vamos tentar acessar as propriedades
$homem->nome = "João"; // public
// $homem->idade = 30; // protected - ERRO
// $homem->peso = 80; // private - ERRO
