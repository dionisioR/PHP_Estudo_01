<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RD3W</title>
    <link rel="shortcut icon" href="../../img/logo.jpg" type="image/jpg">

</head>

<body>
    <h1>COPIAR, MOVER, RENOMEAR E DELETAR ARQUIVOS</h1>
    <?php
    // COPIAR
    //---------------------------------------------------------------------------------
    // Copiar um arquivo
    copy(__DIR__ . '/origem/file_origem.txt', __DIR__ . '/destino/file_origem.txt');

    // Podemos copiar e alterar o nome do arquivo
    // Observação: Se o arquivo existir ele será substituido
    copy(__DIR__ . '/origem/file_origem.txt', __DIR__ . '/destino/file_destino.txt');

    // MOVER
    //---------------------------------------------------------------------------------
    // Mover um arquivo
    if (file_exists(__DIR__ . '/file.txt')) {
        rename(__DIR__ . '/file.txt', __DIR__ . '/destino/file.txt');
    }

    // RENOMEAR
    //---------------------------------------------------------------------------------
    // Esta função também serve para renomear o arquivo desde que seja mantido o path
    if (file_exists(__DIR__ . '/file2.txt')) {
        rename(__DIR__ . '/file2.txt', __DIR__ . '/file_renomeado.txt');
    }
    // echo __DIR__ . '/file.txt';

    // DELETAR
    //---------------------------------------------------------------------------------
    // Deletar um arquivo
    if (file_exists(__DIR__ . '/file.txt')) {
        unlink(__DIR__ . '/file.txt');
    }
    ?>

</body>

</html>