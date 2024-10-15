<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RD3W</title>
</head>
<body>
    <h1>BOOLEAN</h1>
    <?php
    // BOOLEAN
    // São tipos de dados que podem ter apenas dois valores: true ou false.

    $apresentar_nome = true;
    $apresentar_idade = false;

    // Os valores são case-insensitive
    $apresentar_endereco = TRUE;  // É o mesmo que $apresentar_endereco =  true

    echo "Apresentar Nome: " . $apresentar_nome . '<br>';
    echo "Apresentar Idade: " . $apresentar_idade . '<br>';
    echo "Apresentar Endereço: " . $apresentar_endereco . '<br>';

    /*
        São variáveis usadas na maioria das vezes em estruturas condicionais e de repetição.
        Por exemplo, em uma estrutura condicional, podemos verificar se uma condição é verdadeira ou falsa.
        Se a condição for verdadeira, executamos um bloco de código. Se for falsa, executamos outro bloco de código.

        Veremos também que podemos converter valores em booleanos.
        Tradicionalmente, os valores 0, 0.0, '', '0', null, false e array() são considerados falsos.
        Todos os outros valores são considerados verdadeiros.
    */

    // Podemos ainda determinar se uma variável é do tipo booleano com a função is_bool()
    echo is_bool($apresentar_nome) . '<br>';
    echo is_bool($apresentar_idade) . '<br>';
    echo is_bool($apresentar_endereco) . '<br>';
    echo '<hr>';
    var_dump($apresentar_nome);
    echo '<br>';
    var_dump($apresentar_idade);
    echo '<br>';
    var_dump($apresentar_endereco);

    ?>
    
</body>
</html>