<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RD3W</title>
    <link rel="shortcut icon" href="../../img/logo.jpg" type="image/jpg">

</head>
<body>
    <h1>FLOAT</h1>
    <?php
    // FLOAT
    // São números com casas decimais.
    // Podem ser representados com ponto.
    // Podem ser representados em notação científica.

    $valor = 125.5;
    echo $valor . '<br>';
    echo gettype($valor) . '<br>';
    var_dump($valor);
    echo '<hr>';

    // Também pode ser definido da seguinte forma
    $valor = 2.5e3; // 2.5 * 10^3
    echo $valor . '<br>';
    
    $valor = 1_532.52;
    echo $valor . '<br>';

    // O valor máximo e mínimo depende da plataforma
    echo PHP_FLOAT_MAX . '<br>';
    echo PHP_FLOAT_MIN . '<hr>';

    // Converter para float
    $valor = '125.5';
    $valor_float = (float) $valor;
    echo $valor_float . '<br>';

    // Podemos ainda determinar se uma variável é do tipo float com a função is_float()
    echo is_float($valor) . '<br>';
    echo is_float($valor_float) . '<br>';
    echo '<hr>';

    // INFINITY - INF
    // Representa o infinito positivo
    // É um valor demasiado elevado para ser representado
    // $valor = 10 / 0;  // ERRO

    $valor = PHP_FLOAT_MAX * 2;
    echo $valor . '<br>';
    echo is_infinite($valor) . '<br>';
    echo '<hr>';

    ?>
    
</body>
</html>