<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RD3W</title>
    <link rel="shortcut icon" href="../../img/logo.jpg" type="image/jpg">
</head>
<body>
    <h1>Inteiro</h1>
    <?php
    // INTEIRO - INT
    // São números inteiros, positivos ou negativos, sem casas decimais.

    $idade = 25;
    $numero_negativo = -10;
    $numero_positivo = 10;

    echo $idade . '<br>';
    echo $numero_negativo . '<br>';
    echo $numero_positivo . '<br>';
    echo '<hr>';

    // Podemos ainda determinar se uma variável é do tipo inteiro com a função is_int()
    echo is_int($idade) . '<br>';
    echo is_int($numero_negativo) . '<br>';
    echo is_int($numero_positivo) . '<br>';
    $valor = '';
    echo is_int($valor) . '<br>';
    echo '<hr>';

    // Em sistems de 32 bits e 64 bits, temos limites máximos e mínimos diferentes.
    // Podemos ver os limites usando constantes nativas do PHP
    echo PHP_INT_MAX . '<br>';
    echo PHP_INT_MIN . '<br>';
    echo '<hr>';

    // Podemos definir valores com números inteiros, hexadecimais, octogonal e binários
    
    // INTEIRO
    $numero = 10;
    echo $numero . '<br>';

    // HEXADECIMAL
    $numero_hex = 0x10; // 16
    echo $numero_hex . '<br>';

    // OCTOGONAL
    $numero_oct = 010; // 8
    echo $numero_oct . '<br>';

    // BINÁRIO
    $numero_bin = 0b10; // 2
    echo $numero_bin . '<hr>';

    // O que acontece quando ultrapassamos o limite do valor inteiro?
    $numero = PHP_INT_MAX + 1;
    var_dump($numero);
    echo '<hr>';
    // Passou a se do tipo FLOAT 

    // Conversão - CASTING
    $valor = "125";
    $valor_inteiro = (int) $valor;
    // ou
    $valor_inteiro = (integer) $valor;

    // ATENÇÃO
    echo (int) '100';  // 100
    echo '<br>';
    echo (int) '100.1';  // 100
    echo '<br>';
    echo (int) '250ABcd';  // 250
    echo '<br>';
    echo (int) 'ABcd250';  // 0
    echo '<br>';
    echo (int) 'Somente Texto';  // 0
    echo '<br>';

    $valor = 1_500_000;
    echo $valor . '<br>';

    ?>
    
</body>
</html>