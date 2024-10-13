<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RD3W</title>
    <link rel="shortcut icon" href="../../img/logo.jpg" type="image/jpg">

</head>
<body>
    <h1>Super Globais</h1>
    <?php
    /*
    SUPER GLOBAIS
    - São variáveis internas do PHP que são sempre acessíveis, independentemente do escopo.
    São variáveis em forma de arrays que estão sempre disponíveis durante a execução do código e as quais podemos
    acessar e manipular em qualquer parte do código.

    Vejamos o exemplo de uma variável que pode ser usada dentro de uma função.
    Neste caso, todas as variáveis que tem um escopo global podem ser acessadas da super global $GLOBALS
    */

    $nome = "RD3W";
    apresentar();

    echo $nome . '<br>';
    echo $apelido; 

    function apresentar(){
        global $nome;
        echo $nome . '<br>';
        $apelido = "Dio";

        // ou

        echo $GLOBALS['nome'].'<br>';

        // Podemos alterar o valor da variável global
        $GLOBALS['nome'] = "RD3W - Dio";
        $GLOBALS['apelido'] = "Curso";

        // IMPORTANTE:
        // Se a variável global não existir, ela será criada
        $GLOBALS['nome2'] = "Curso";
        echo $GLOBALS['nome2'].'<br>';

        // Existem alguma alterações que não podemos fazer como por exemplo:
        // $GLOBALS = "Curso"; // Não podemos fazer isso~
        // $GLOBALS = []; // Não podemos fazer isso~

    }
    ?>
    
</body>
</html>