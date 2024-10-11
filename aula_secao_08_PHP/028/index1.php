<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RD3W</title>
    <link rel="shortcut icon" href="../../img/logo.jpg" type="image/jpg">

</head>

<body>
    <h1>FILESYSTEM</h1>
    <?php
    echo '<pre>';

    // listagem de ficheiros
    echo __DIR__ . '<br>';  // caminho do diretório
    echo '<hr>';

    $files = scandir(__DIR__);  // constante mágica __DIR__
    print_r($files);
    // O . e o .. estão sempre presentes em cada pasta.
    // são identificados como a pasta atual (.) e a pasta anterior (..)
    echo '<hr>';

    $file2 = scandir('./');  // lista a pasta atual
    print_r($file2);
    echo '<hr>';

    $file3 = scandir('../');  // lista a pasta anterior
    print_r($file3);
    echo '<hr>';

    //---------------------------------------------------
    // Podemos verificar se cada elemento encontrado é um arquivo ou uma pasta
    $files = scandir(__DIR__);
    foreach ($files as $file) {
        // is_dir() - identifica a pasta
       echo is_file($file) ? "Arquivo {$file}": "Pasta {$file}";
       echo '<br>';
    }
    echo '<hr>';

    //---------------------------------------------------
    // se quisermos listar apenas os arquivos
    $files = scandir(__DIR__);
    foreach ($files as $file) {
        if(is_file($file)){
            echo "Arquivo {$file}";
            echo '<br>';
        }
    }
    echo '<hr>';

    ?>

</body>

</html>