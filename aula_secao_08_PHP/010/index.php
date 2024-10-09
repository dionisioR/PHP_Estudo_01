<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RD3W</title>
    <link rel="shortcut icon" href="../../img/logo.jpg" type="image/jpg">

</head>
<body>
    <h1>NULL</h1>
    <?php

    // NULL
    // É um tipo especial de dado.
    // Representa uma variável sem valor ou com valor NULL.

    $valor = null;  // case-insensitive
    echo $valor . '<br>';  // nada serpa exibido
    var_dump($valor) . '<br>';  // null
    echo '<hr>';

    // Podemos ainda determinar se uma variável é do tipo NULL com a função is_null()
    echo is_null($valor) . '<br>';
    echo is_null($valor_inexistente) . '<br>';
    echo '<hr>';

    $valor2 = 100;
    echo $valor2 . '<br>';
    var_dump($valor2) . '<br>';
    unset($valor2);  // vai destruir a variável. Apagar a variável
    echo $valor2 . '<br>';  // ERRO
    var_dump($valor2) . '<br>';  // NULL
    echo '<hr>';

    // Verificando se a variável é nula
    $valor = null;
    if (is_null($valor)) {
        echo 'Sim, a variável é nula';
    } 
    
    echo '<hr>';

    // Verificando se a variável é nula ou vazia
    if(empty($valor)){
        echo 'Sim, a variável é nula ou vazia';
    } 
    echo '<hr>';


    $valor = '';
    if(empty($valor)){
        echo 'Sim, a variável é nula ou vazia';
    } 
    ?>
    
</body>
</html>