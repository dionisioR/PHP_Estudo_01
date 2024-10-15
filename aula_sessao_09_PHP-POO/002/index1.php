<?php
class Mulher{
    public $nome;
    public $idade;
    public $peso;

    function metodo_1() {
        echo "Método 01";
    }

    protected function metodo_2() {
        echo "Método 02";
    }
    private function metodo_3() {
        echo "Método 03";
    }
}

// instanciando um objeto
$mulher = new Mulher();
$mulher->nome = "Maria";
$mulher->idade = 25;
$mulher->peso = 60;

echo "Nome: " . $mulher->nome . "<br>";
echo "Idade: " . $mulher->idade . "<br>";
echo "Peso: " . $mulher->peso . "<br>";

$mulher->metodo_1();
echo "<br>";
// $mulher->metodo_2();  // ERRO
echo "<br>";
// $mulher->metodo_3();   // ERRO