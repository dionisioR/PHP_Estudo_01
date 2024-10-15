<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RD3W</title>
    <link rel="shortcut icon" href="../../img/logo.jpg" type="image/jpg">

</head>

<body>
    <h1>Arquivo CSV</h1>
    <?php

    /*
    CSV - significa Comma Separated Values (Valores separados por vírgulas)
    É um formato de arquivo que armazena dados tabelados, cujo grande uso é em planilhas eletrônicas.
    É uma arquivo com estrutura particular que permite ser usado entre aplicações par atransporte de dados.
    Excel, LibreOffice, Google Sheets, ...
    */

    // cria um arquivo CSV
    $file = fopen('dados.csv', 'w');

    // Header das colunas
    $header = ['Coluna A', 'Coluna B', 'Coluna C'];
    fputcsv($file, $header);

    // Linhas
    for ($i = 0; $i < 100; $i++) {
        $linha = [
            rand(0, 100),
            rand(100, 1000),
            rand(1000, 10000)
        ];
        fputcsv($file, $linha);
    }
    fclose($file);

    // Os arquivos CSV podem conter diferentes opções de formatação.
    // É muito simples definir essas opções.
    // Todas as configurações estão nos argumentos que podemos passar para a função 'fputcsv'

    // Exemplo de formatação
    /*
    fputcsv(
        $file, // resource / arquivo
        $linha, // array com dados
        ';', // separador de colunas
        '"', // delimitador de colunas
        '\\' // escape
    );
    */

    // Exemplo de leitura de arquivo CSV
    // A leitura é feita usando a função fgetcsv
    // A função fgetcsv lê uma linha de um arquivo CSV e a divide em campos.
    // A função retorna um array contendo os campos lidos ou FALSE em caso de erro ou fim de arquivo.
    echo '<pre>';
    $file = fopen('dados.csv', 'r');
    while (!feof($file)) {
        $linha = fgetcsv($file);
        print_r($linha);
    }
    fclose($file);
    ?>

</body>

</html>