<?php
// Declaração STRICT TYPES

declare(strict_types=1);

function adicionar(int $a, int $b): int{
    return $a + $b;
}

echo adicionar(10,20);
// echo "<br>";
// echo adicionar(10.5,20.5);  // ERRO
// echo "<br>";
// echo adicionar("10","20");  // ERRO
// echo "<br>";