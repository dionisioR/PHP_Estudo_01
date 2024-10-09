<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RD3W</title>
    <link rel="shortcut icon" href="../../img/logo.jpg" type="image/jpg">

</head>
<body>
    <h1>String</h1>
    <?php
    // STRING

    /*
    Umas string é um conjunto de caracteres.
    Podem ser definidas de várias formas:
    - Aspas simples
    - Aspas duplas
    */

    $nome = 'RD3W';
    $sobrenome = "Cursos";
    // As duas variáveis são do tipo string
    // Diferença: Nas aspas duplas podemos adicionar variáveis no interior.

    // Concatenação
    $nome_completo = $nome . ' ' . $sobrenome;
    echo $nome_completo . '<br>';

    // Aspas duplas
    // O PHP reconhece a variável dentro das aspas duplas.
    echo "Meu nome é $nome $sobrenome" . '<br>';

    // Aspas simples
    // O PHP não reconhece a variável dentro das aspas simples.
    echo 'Meu nome é ' . $nome . ' ' . $sobrenome . '<br>';
    echo 'Meu nome é $nome $sobrenome' . '<br>';

    // Podemos melhorar a leitura do código com as seguintes equivalências
    echo "Meu nome é {$nome} {$sobrenome}" . '<br>';
    
    // Podemos ainda determinar se uma variável é do tipo string com a função is_string()
    echo is_string($nome) . '<br>';
    echo is_string($sobrenome) . '<br>';
    echo is_string($nome_completo) . '<br>';
    echo '<hr>';

    // Podemos ainda determinar o tamanho de uma string com a função strlen()
    echo strlen($nome) . '<br>';
    echo strlen($sobrenome) . '<br>';
    echo strlen($nome_completo) . '<br>';
    echo '<hr>';

    // Obter a primeira letra
    echo $nome[0] . '<br>';
    echo $sobrenome[0] . '<br>';
    echo '<hr>';

    // Para acesso a letras da direita para esquerda
    // podemos utilizar valores negativos
    echo $nome[-1] . '<br>';
    echo $sobrenome[-1] . '<br>';
    
    // Podemos utilizar este método para modificar letras
    $nome[0] = 'P';
    echo $nome . '<br>';

    // IMPORTANTE
    $frase = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut delectus a molestias sapiente nesciunt, alias esse labore, porro veritatis laudantium praesentium quae, dolorem enim magni qui nisi excepturi tempora officia.";

    echo $frase . '<hr>';

    // Apresenta a quantidade de caracters de uma string
    echo strlen($frase) . '<hr>';

    // Transformar todas as letras em maiúsculas
    echo strtoupper($frase) . '<hr>';

    // Transformar todas as letras em minísculas
    echo strtolower($frase) . '<hr>';

    // Apresentar somente parte da frase
    echo substr($frase, 0, 20) . '<hr>';

    // Apresentar a partir de uma determinada posição
    echo substr($frase, 20) . '<hr>';

    // Apresentar a partir de uma determinada posição e limitar a quantidade de caracteres
    echo substr($frase, 20, 10) . '<hr>';

    // Substituir palavras
    echo str_replace('Lorem', 'PHP', $frase) . '<hr>';

    // Verifica se uma palavra existe dentro da string
    echo strpos($frase, 'sit') . '<hr>';
    echo strpos($frase, 'xxxx') . '<hr>';
    ?>
    
</body>
</html>