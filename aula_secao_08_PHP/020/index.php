<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RD3W</title>
    <link rel="shortcut icon" href="../../img/logo.jpg" type="image/jpg">

</head>

<body>
    <h1>FOR</h1>
    <?php

    // Iterando arrays
    $nomes = ["João", "Anna", "Carlos"];
    for ($i = 0; $i < count($nomes); $i++) {
        echo $nomes[$i] . "<br>";
    }
    echo '<hr>';

    // Seguindo o exemplo assima, imagine um array muito grande
    // em vez de chamar a função 'count()' no array faça da seguinte forma
    // Assim a função 'count()' será chamada uma única vez
    $nomes = ["João", "Anna", "Carlos", "Maria", "Juca"];
    $total = count($nomes);
    for ($i = 0; $i < $total; $i++) {
        echo $nomes[$i] . "<br>";
    }

    echo '<hr>';

    // Iterando letras de uma string
    $frase = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem non quidem aspernatur provident numquam, quibusdam animi harum itaque beatae, rerum ab magni, voluptatem enim nemo asperiores! Maxime dolores magnam laudantium!';
    for ($i = 0; $i < strlen($frase); $i++) {
        echo $frase[$i] . " - ";
    }
    echo '<hr>';

    ?>


</body>

</html>