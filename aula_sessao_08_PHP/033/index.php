<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RD3W</title>
    <link rel="shortcut icon" href="../../img/logo.jpg" type="image/jpg">

</head>
<body>
    <h1>CONSTANTES MÁGICAS</h1>
    <?php

    /*
        CONSTANTES MÁGICAS

        Existem nove constantes mágicas no PHP
        São chamadas de constantes mágicas porque seu valor é definido dependendo do local onde estão sendo utilizadas.
        Por exemplo, o valor de __LINE__ depende da linha de código dentro do script onde a constante está sendo utilizada;
        São constantes case insensitive, e permite solucionar vários desafios.
    */

    // __LINE__
    // indica a linha atual do código onde a constante se encontra
    echo 'Estamos na linha: ' . __LINE__ . '<br>';

    require_once('./script.php');

    // __FILE__
    // indica o caminho do arquivo onde a constante se encontra
    // se for usada dentro de um include ou require será indicado o nome do script que está a ser incluído.
    echo 'Estamos no arquivo: ' . __FILE__ . '<br>';
    require("./script1.php");
    include('./script1.php');
    echo '<hr>';

    // __DIR__
    // indica o diretório do arquivo onde a constante se encontra
    // indica a pasta à qual pertence o script atual.
    // se usada dentro de um include, será devolvida a pata do arquivo que está a ser incluído.
    // Tem o esmo output que dirname(__FILE__).
    // Não tem barra no final do valor, a não ser que estejamos na raiz.

    echo 'Estamos no diretório: ' . __DIR__ . '<br>';
    include('./script.php');
    echo '<hr>';

    // __FUNCTION__
    // indica o nome da função onde a constante se encontra
    // se usada fora de uma função, não retorna nada.
    function teste() {
        echo 'Estamos na função: ' . __FUNCTION__ . '<br>';
    }
    teste();

    //---------------------------------------------
    // OUTRAS CONSTANTES MÁGICAS
    //---------------------------------------------

    // __CLASS__
    // indica o nome da classe onde a constante se encontra
    // se usada fora de uma classe, não retorna nada.

    // __TRAIT__
    // indica o nome do trait onde a constante se encontra
    // se usada fora de um trait, não retorna nada.

    // __METHOD__
    // indica o nome do método onde a constante se encontra
    // se usada fora de um método, não retorna nada.

    // __NAMESPACE__
    // indica o namespace onde a constante se encontra
    // se usada fora de um namespace, não retorna nada.

    // ClassName::class
    // retorna o nome da classe onde é usada

    // As constantes mágicas mais práticas são __FILE__ e __DIR__

    ?>
    
</body>
</html>