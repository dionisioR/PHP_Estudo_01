<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RD3W</title>
    <link rel="shortcut icon" href="../../img/logo.jpg" type="image/jpg">

</head>
<body>
    <h1>Funções para manipular arrays</h1>
    <?php

    // Funções para manipular arrays
    $nomes = ["João", "Juca", "Antônio", "Anna", "Maria"];

    // is_array - verifica se a variável é um array
    if(is_array($nomes)){
        echo "É um array <br>";
    } else {
        echo "Não é um array <br>";
    }
    echo '<hr>';

    // count - conta o número de elementos de um array
    echo count($nomes) . "<br>";

    // sizeof - retorna o mesmo valor que count
    echo sizeof($nomes) . "<br>";
    echo '<hr>';

    // Adiciona valores no final do array
    array_push($nomes, "Pedro", "José");
    echo '<pre>';
    print_r($nomes);
    echo '</pre>';
    echo '<hr>';

    // Adiciona elementos no início do array
    array_unshift($nomes, "Marta", "Ana");
    echo '<pre>';
    print_r($nomes);
    echo '</pre>';
    echo '<hr>';

    // Remove o último elemento do array
    array_pop($nomes);
    echo '<pre>';
    print_r($nomes);
    echo '</pre>';
    echo '<hr>';

    // Remove o primeiro elemento do array
    array_shift($nomes);
    echo '<pre>';
    print_r($nomes);
    echo '</pre>';
    echo '<hr>';

    // Elinina um determinado elemento do array
    // É necessário saber seu índice
    unset($nomes[2]);
    echo '<pre>';
    print_r($nomes);
    echo '</pre>';
    echo '<hr>';



    ?>
    
</body>
</html>