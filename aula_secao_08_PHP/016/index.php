<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RD3W</title>
    <link rel="shortcut icon" href="../../img/logo.jpg" type="image/jpg">

    <!-- 
    Usando como ponto de partida o array de produtos, exiba no HTML uma unordered list (ul)
    contendo todos os produtos do array
    -->

</head>

<body>
    <h1>Exercício</h1>
    <?php

    $produtos = ["arroz", "batata", "laranja"];

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
