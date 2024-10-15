<?php

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RD3W</title>
    <link rel="shortcut icon" href="../../img/logo.jpg" type="image/jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    </style>
</head>

<body>
    <div class="container my-5">
        <h1>Validação simples e complexa</h1>
        <?php
        /*
        Validação simples e complexa de dados
        -----------------------------------------

        Como vimos, a validação de formulário é de extrema importância para impedir problemas no fluxo do nosso código.
        No entanto, a validação de formulários não é o único processo em que é necessário validar dados.

        Por exemplo, podemos estar a carregar informações a partir de um arquivo de dados, ou de uma base de dados, e podemos
        ter a necessidade de analisar, por exemplo, se um e-mail é valido ou se uma determinada string é um valor númérico.

        A validação de um determinado dado pode ser mais simples, usando funções existentes do PHP para essa validação, 
        ou com necesidade de recorrermos a expressões regulares.
        */

        // Validar se um valor é uma string
        $valor1 = 'RD3W';
        $valor2 = 123;

        var_dump(is_string($valor1));
        echo '<br>';
        var_dump(is_string($valor2));
        echo '<hr>';

        // Validar se um valor é um número
        $valor1 = 'RD3W';
        $valor2 = 123;
        $valor3 = 123.45;
        $valor4 = true;

        var_dump(is_numeric($valor1));
        echo '<br>';
        var_dump(is_numeric($valor2));
        echo '<br>';
        var_dump(is_numeric($valor3));
        echo '<br>';
        var_dump(is_numeric($valor4));
        echo '<hr>';

        // validar se é boolean
        $valor1 = 'false';
        $valor2 = false;
        $valor3 = true;
        $valor4 = 0;
        $valor5 = 1;

        var_dump($valor1);
        echo '<br>';
        var_dump($valor2);
        echo '<br>';
        var_dump($valor3);
        echo '<br>';
        var_dump($valor4);
        echo '<br>';
        var_dump($valor5);
        echo '<hr>';

        // validar se uma variável está vazia
        $valor1 = 'texto';
        $valor2 = '';
        $valor3 = null;
        $valor4 = 0;
        $valor5 = false;
        $valor6 = 1;
        $valor7 = ' ';
        $valor8 = [];

        var_dump(empty($valor1));
        echo '<br>';
        var_dump(empty($valor2));
        echo '<br>';
        var_dump(empty($valor3));
        echo '<br>';
        var_dump(empty($valor4));
        echo '<br>';
        var_dump(empty($valor5));
        echo '<br>';
        var_dump(empty($valor6));
        echo '<br>';
        var_dump(empty($valor7));
        echo '<br>';
        var_dump(empty($valor8));
        echo '<hr>';



        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>