<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RD3W</title>
    <link rel="shortcut icon" href="../../img/logo.jpg" type="image/jpg">

</head>
<body>
    <h1>Arrays Multidimensionais</h1>
    <?php

    // Arrays Multidimensionais
    // É uma variável composta multidimensional indexada
    // Arrays que contém outros arrays

    $lojas = [
        'porto' => [
            'telefone' => '123456',
            'email' => 'porto@g.com'
        ],
        'lisboa' => [
            'telefone' => '654789',
            'email' => 'lisboa@g.com'
        ],
        'coimbra' => [
            'telefone' => '963258',
            'email' => 'coimbra@g.com'
        ],
    ];

    echo '<pre>';
    var_dump($lojas);
    echo '</pre>';
    echo '<hr>';

    echo '<pre>';
    print_r($lojas);
    echo '</pre>';
    echo '<hr>';

    // Acessando elementos do array multidimensional
    echo $lojas['porto']['telefone'] . "<br>";
    echo $lojas['porto']['email'] . "<br>";
    echo $lojas['lisboa']['telefone'] . "<br>";
    echo $lojas['lisboa']['email'] . "<br>";

    echo '<hr>';
    
    // Outro exemplo
    $notas = [
        [10,20,30],
        [40,50,60],
        [70,80,90]
    ];
    
    echo '<pre>';
    var_dump($notas);
    echo '</pre>';
    echo '<hr>';

    // utilizando for para percorrer todos os elementos do array
    for ($i = 0; $i < count($notas); $i++) {
        for ($j = 0; $j < count($notas[$i]); $j++) {
            echo $notas[$i][$j] . " ";
        }
        echo "<br>";
    }
    echo '<hr>';

    echo $notas[0][0] . ' - ';
    echo $notas[0][1] . ' - ';
    echo $notas[0][2] . ' - ';
    echo $notas[1][0] . ' - ';
    echo $notas[1][1] . ' - ';
    echo $notas[1][2] . ' - ';
    echo $notas[2][0] . ' - ';
    echo $notas[2][1] . ' - ';
    echo $notas[2][2] . ' - ';

    ?>
    
</body>
</html>