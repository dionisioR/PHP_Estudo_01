<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RD3W</title>
    <link rel="shortcut icon" href="../../img/logo.jpg" type="image/jpg">

</head>
<body>
    <h1>Lendo dados a partir de um arquivo</h1>
    <?php
        /*
        Existem várias formas de leitura de dados a partir de um arquivo de texto.
        No vídeo anterior vimos a função file_put_contents() para guardar dados.
        Vejamos agora a função file_get_contents()
        file_get_contents() - utilizado para ler arquivos.
        */

        $dados = file_get_contents('dados.txt');
        echo $dados;
        echo '<hr>';

        echo '<pre>';
        print_r($dados);
        echo '</pre>';
        echo '<hr>';

        echo nl2br($dados);
        echo '<hr>';

        // Podemos ler apenas uma parte do arquivo
        $dados = file_get_contents('dados.txt', offset:6, length:40);
        echo nl2br($dados);

        echo '<hr>';

        //---------------------------------------------
        //---------------------------------------------
        //---------------------------------------------

        /*
        Em muitas circunstâncias você terá a necessidade de um modo de leitura diferente de dados.
        Ler uma linha de cada vez por exemplo.
        */

        $arquivo = fopen('dados.txt', 'r');
        while (!feof($arquivo)) {
            $linha = fgets($arquivo);
            echo nl2br($linha);
        }
        fclose($arquivo);
        echo '<hr>';

        // O que é feof
        // f - file
        // e - end
        // o - of
        // f - file
        // ou seja, feof - testa pelo fim de um arquivo
        //---------------------------------------------

        // ou
        $arquivo = fopen('dados.txt', 'r');
        while(($linha = fgets($arquivo)) !== false){
            echo $linha . '<br>';
        }
        fclose($arquivo);

        //-----------------------------------------------
        //-----------------------------------------------
        // Podemos utilizar o fopen / fclose para ler ou escrever
        
        // escrever em um arquivo
        $file = fopen('novo.txt', 'w');  // r - leitura | w - escrita | a - append
        for($i = 0; $i <= 1000; $i++){
            // escrevando a tabuada no arquivo
            fputs($file, "5 x $i = " . 5 * $i . PHP_EOL);
            // fwrite() é um alias de fputs
        }
        fclose($file);
        echo 'FIM';
    ?>
    
</body>
</html>