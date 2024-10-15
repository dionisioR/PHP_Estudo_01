<?php
/*
    COMO ESCREVER UMA CLASSE E INSTANCIAR UM OBJETO

    As classes podem ter PROPRIEDADES e  MÉTODOS

    PROPRIEDADES: são variáveis da classe
    MÉTODOS: são funções da classe

    A palavra-chave $this refere-se ao objeto atual e só está disponível dentro dos métodos (funções da classe)
    */

    class Fruto{
        public $nome;
        public $cor;
        public $peso;

        public function exibir(){
            return "O fruto é um(a) {$this->nome}, tem a cor {$this->cor} e pesa {$this->peso} gramas.";
        }
    }

    $laranja = new Fruto();
    $laranja->nome = "Laranja";
    $laranja->cor = "laranja";
    $laranja->peso = 150;

    $banaba = new Fruto();
    $banaba->nome = "Banana";
    $banaba->cor = "amarela";
    $banaba->peso = 100;

    echo $laranja->exibir();
    echo "<br>";
    echo $banaba->exibir();