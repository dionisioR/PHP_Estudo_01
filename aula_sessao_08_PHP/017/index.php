<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RD3W</title>
    <link rel="shortcut icon" href="../../img/logo.jpg" type="image/jpg">

    <!-- 
    Usando como ponto de partida o array de produtos, inverta a ordem dos mesmos e acrescenta 
    ao final 'maça' e 'pêra' e exiba no HTML uma unordered list (ul)
    contendo todos os produtos do array
    -->

</head>

<body>
    <h1>Exercício</h1>
    <?php

    $produtos = ["arrozaaa", "batata", "laranja"];
    $produtos = array_reverse($produtos);
    // $produtos[] = 'maça';
    // $produtos[] = 'pêra';
    // ou
    array_push($produtos, 'maçã', 'pêra');


    ?>

    <ul>
        <?php
        foreach ($produtos as $produto) {
            echo "<li>$produto</li>";
        }
        ?>
    </ul>

</body>

</html>