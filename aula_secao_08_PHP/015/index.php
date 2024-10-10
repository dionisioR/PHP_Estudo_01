<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RD3W</title>
    <link rel="shortcut icon" href="../../img/logo.jpg" type="image/jpg">

</head>
<body>
    <h1>Funções Arrays Associativos</h1>
    <?php
        $cliente = [
            'nome' => 'João',
            'sobrenome' => 'Riberto',
            'idade' => 25,
            'email' => 'j@g.com'
        ];

        echo '<pre>';
        print_r($cliente);
        echo '</pre>';
        echo '<hr>';

        // exibir um valor do array
        echo $cliente['nome'] . '<br>';

        // Verificar se existe uma determinada key no array
        if (key_exists('telefone', $cliente)) {
            echo 'Existe';
        } else {
            echo 'Não existe';
        }
        echo '<hr>';

        if (key_exists('email', $cliente)) {
            echo 'Existe';
        } else {
            echo 'Não existe';
        }
        echo '<hr>';


        // Transforma um array em uma string
        $resultado = implode(',', $cliente);
        echo $resultado;
        echo '<hr>';

        // Transforma uma string em um array
        $nomes = 'João, Maria, Pedro, Ana';
        $array_nomes = explode(',', $nomes);
        echo '<pre>';
        print_r($array_nomes);
        echo '</pre>';
        echo '<hr>';

        // Cria um novo array a partir de uma porção do array original
        $cliente2 = array_slice($cliente, 0, 2);
        echo '<pre>';
        print_r($cliente2);
        echo '</pre>';
        echo '<hr>';

        $cliente3 = array_slice($cliente, 2);
        echo '<pre>';
        print_r($cliente3);
        echo '</pre>';
        echo '<hr>';
        




    ?>
    
</body>
</html>