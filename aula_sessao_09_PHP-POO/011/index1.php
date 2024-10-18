<?php
/*
MÉTODOS ESTÁTICOS

Uma classe pode conter métodos estáticos e métodos que não são estáticos
*/

class Matematica
{
    public static function somar($x, $y)
    {
        return $x + $y;
    }
    public function executar_operacao()
    {
        $resultado = self::somar(10, 20);
        return $this->metodo_interno($resultado);
    }
    private function metodo_interno($resultado)
    {
        return $resultado * 2;
    }
}

echo Matematica::somar(100,200);
echo "<br>";

$matematica = new Matematica();
echo $matematica->executar_operacao(); // 60