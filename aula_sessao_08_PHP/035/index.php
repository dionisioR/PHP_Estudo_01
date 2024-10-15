<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RD3W</title>
    <link rel="shortcut icon" href="../../img/logo.jpg" type="image/jpg">

</head>
<body>
    <h1>$_GET</h1>
    <?php
    /*
    // SUPER GLOBAL $_GET


    Com muita frequência vês na barra de endereços do teu browser algo parecido com:
    https://www.lojaonline.com/index.php?id=1&prd=25

    O endereço que vês acima tem uma url:
    https://www.lojaonline.com/index.php

    Seguida de um sinal de interrogação que dá início à query string,
    que é o conjunto de parâmetros que vamos poder captar dentro do nosso script

    Cada parâmetro está definido por um nome e um valor
    No caso da URL acima, temos um id=1

    Logo depois aparece um & que permite separar os parâmetros de uma query string.
    Como conseguimos chegar a estes parâmetros.

    Vamos ver que a super global $_GET é um array onde são automaticamente colocados os parâmetros de uma query stringl
    */

    // Exemplo 1
    // Vamos utilizar o endereço:
    // https://www.lojaonline.com/index.php
    if(!empty($_GET)){
        echo 'Existem parâmetros na query string';
    }else{
        echo 'Não existem parâmetros na query string';
    }
    ?>
    
</body>
</html>