<?php
// Declaração STRICT TYPES

declare(strict_types=1);

// a função tabuada recebe um inteiro e devolve um array
function tabuada(int $numero): array{
    $tabuada = [];
    for($i=1; $i<=10; $i++){
        $tabuada[] = $numero * $i;
    }
    return $tabuada;
}


$resultado = tabuada(10);

echo '<pre>';
print_r($resultado);
echo '</pre>';
echo '<hr>';

foreach ($resultado as $item) {
    echo $item . "<br>";
}