<?php
 // CONSTRUTOR
    // É um método mágico que é chamado automaticamente quando um objeto é instanciado.
    // É útil para inicializar propriedades.
    // Pode receber parâmetros.
    // Pode ser sobrescrito.
    // Pode ser herdado.
class Mulher{
    private $nome;
    private $sobrenome;

    function __construct($n, $s) {
        $this->nome = $n;
        $this->sobrenome = $s;
    }

    function getNome() {
        return $this->nome;
    }
    function getSobrenome() {
        return $this->sobrenome;
    }
    function getNomeCompleto() {
        return $this->nome . ' ' . $this->sobrenome;
    }
}

$mulher = new Mulher('Maria', 'Silva');
echo "Nome completo: " . $mulher->getNome() . ' ' . $mulher->getSobrenome();
echo "<br>";
echo "Nome completo: " . $mulher->getNomeCompleto();