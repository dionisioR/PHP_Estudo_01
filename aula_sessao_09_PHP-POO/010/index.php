<?php
// TRAITS

// O QUE SÃO TRAITS E COMO UTILIZAR

/*
O PHP apenas suporta herançao única: uma classe só pode herdar de uma única outra classe.
Imagine que queres que a classe seja derivada de outra e ao mesmo tempo, possa 'herader' outra funcionalidade a partir de outras estrututras.
É neste conceito que os TRAITS surgem

Basicamente, traitis permitem declara métodos que podem ser usados em múltiplas classes.

Na sua vertente mais avançada, os traits podem conter métodos abstratos que podem ser usados em múltiplas classes, e esses métodos podem ter qualquer tipo de modificador de acesso.
*/

trait funcoes_matematicas{
    public function adicionar($a, $b){
        return $a + $b;
    }
    public function subtrair($a, $b){
        return $a - $b;
    }
    public function multiplicar($a, $b){
        return $a * $b;
    }
    public function dividir($a, $b){
        return $a / $b;
    }

}

class Calculadora{
    use funcoes_matematicas;
    // Assim todas as funções declaradas na trait funcoes_matematicas será incorporadas na class Calculadora
}

$calc = new Calculadora();
echo '<p>' . $calc->adicionar(10, 20) . '</p>';
echo '<p>' . $calc->subtrair(10, 20) . '</p>';
echo '<p>' . $calc->multiplicar(10, 20) . '</p>';
echo '<p>' . $calc->dividir(10, 20) . '</p>';
echo "<br>";
// O resultado será: 30, -10, 200, 0.5

/*
O que aconteceu aqui?
A classe Calculadora usou a trait funcoes_matematicas, e assim, todas as funções declaradas na trait funcoes_matematicas foram incorporadas na classe Calculadora.
*/