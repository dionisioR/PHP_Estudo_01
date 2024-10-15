<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RD3W</title>
    <link rel="shortcut icon" href="../../img/logo.jpg" type="image/jpg">

</head>

<body>
    <h1>Array</h1>
    <?php

    // Arrays
    // É uma variável componsta unidimensional indexada

    $nomes_1 = array("João", "Juca", "Ana");
    // ou
    $nomes_2 = ["João", "Juca", "Ana"];

    // Acessando elementos do array
    echo $nomes_1[0] . "<br>";
    echo $nomes_1[1] . "<br>";
    echo $nomes_1[2] . "<br>";
    echo '<hr>';

    // Podemos atribuir chaves aos elementos do array
    $nomes_3 = array("a" => "João", "b" => "Juca", "c" => "Ana");
    // ou
    $nomes_4 = ["a" => "João", "b" => "Juca", "c" => "Ana"];

    // acessando elementos do array
    echo $nomes_3["a"] . "<br>";
    echo $nomes_3["b"] . "<br>";
    echo $nomes_3["c"] . "<br>";

    // se a chave não existir teremos uma msg de erro
    // echo $nomes_3["abc"] . "<br>";
    // para evitar esse erro podemos utilizar a função 'isset'
    echo isset($nomes_3["abc"]) ? $nomes_3["abc"] : "Chave não existe";
    echo "<hr>";

    // Podemos alterar elementos de uma array
    $nomes_3["c"] = "Anna Maria";
    echo $nomes_3["c"] . "<br>";

    echo '<pre>';
    var_dump($nomes_3);
    echo '</pre>';

    echo '<pre>';
    print_r($nomes_3);
    echo '</pre>';
    echo '<hr>';
    ?>

    <h2>Adicionando elementos no array</h2>
    <?php
    $nomes = ["anna", "carla"];
    echo '<pre>';
    print_r($nomes);
    echo '</pre>';
    echo '<hr>';

    $nomes[] = "maria";
    $nomes[] = "jose";
    $nomes[] = "pedro";
    echo '<pre>';
    print_r($nomes);
    echo '</pre>';
    echo '<hr>';

    // ou
    array_push($nomes, "Lucas");
    array_push($nomes, "joão", "juliana");
    echo '<pre>';
    print_r($nomes);
    echo '</pre>';
    echo '<hr>';

    // Removendo elemento (a chave vai desaparecer)
    unset($nomes[2]);
    echo '<pre>';
    print_r($nomes);
    echo '</pre>';
    echo '<hr>';

    // Vimos arrays com índices númericos
    // Podemos ter arrays com índices associativos
    // Esses arrays podem ter índices alfanuméricos

    $empresa = [
        "ceo" => "Dionisio",
        "diretor" => "João",
        "gerente" => "Maria",
        "secretaria" => "Ana",
        "executivo" => "Carlos"
    ];
    echo '<pre>';
    print_r($empresa);
    echo '</pre>';
    echo '<hr>';

    // Para apresentar um valor usamos a key
    echo $empresa["ceo"] . "<br>";
    echo $empresa["diretor"] . "<br>";
    echo $empresa["gerente"] . "<br>";

    // Podemos adicionar mais um valor
    $empresa["supervisor"] = "Pedro";
    echo '<pre>';
    print_r($empresa);
    echo '</pre>';
    echo '<hr>';
    
    ?>

</body>

</html>