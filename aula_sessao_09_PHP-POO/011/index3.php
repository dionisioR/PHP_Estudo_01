<?php
/*
MÉTODOS ESTÁTICOS

Podemos também chamar métodos estáticos de uma classe a partir de outra classe.
*/
class Matematica
{
    public static function somar($x, $y)
    {
        return $x + $y;
    }
}

class Operacoes{
    public function executar($x, $y)
    {
        return Matematica::somar($x, $y);
    }
}

$operacoes = new Operacoes();
echo $operacoes->executar(10, 20); // 30