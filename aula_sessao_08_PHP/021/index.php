<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RD3W</title>
    <link rel="shortcut icon" href="../../img/logo.jpg" type="image/jpg">

</head>

<body>
    <h1>FOREACH</h1>
    <?php
    /*
    É a melhor opção para iterações em arrays ou objetos.

    foreach ($array as $valor ou $keys=>$valor) {
        // código
    }
    */

    $nomes = ["João", "Anna", "Carlos", "Maria", "Juca", "Antônio", "Paula"];
    foreach ($nomes as $nome) {
        echo $nome . "<br>";
    }
    echo '<hr>';

    // Iterando arrays associativos
    $empresa = [
        'nome' => 'RD3W',
        'segmento' => 'Tecnologia',
        'funcao' => 'Desenvolvimento Web',
        'funcionarios' => 10
    ];
    foreach ($empresa as $key => $value) {
        echo "Título: $key >>> Descrição: $value <br>";
    }
    ?>

</body>

</html>