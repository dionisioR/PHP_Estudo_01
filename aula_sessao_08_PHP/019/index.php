<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RD3W</title>
    <link rel="shortcut icon" href="../../img/logo.jpg" type="image/jpg">

</head>

<body>
    <h1>MATCH</h1>
    <p>Similar ao SWITCH.</p>
    <?php

    $opcao = 'cancelada';

    $resultado = match ($opcao) {
        'aprovada' => 'Compra aprovada',
        'anulada', 'cancelada' => 'Compra cancelada',
        'pendente' => 'Compra pendente',
        default => 'Opção inválida'
    };
    echo $resultado;
    echo '<hr>';

    // com números
    $valor = 99;
    $resultado = match (true) {
        $valor > 100 => 'Valor maior que 100',
        $valor == 100 => 'Valor igual a 100',
        $valor < 100 => 'Valor menor que 100',
        default => 'Valor não encontrado'
    };
    echo $resultado;
    echo '<hr>';

    // com variáveis
    $opcao = 'cancelada';
    $aprovada = 'Compra aprovada';
    $cancelada = 'Compra cancelada';
    $pendente = 'Compra pendente';
    $resultado = match ($opcao) {
        'aprovada' => $aprovada,
        'anulada', 'cancelada' => $cancelada,
        'pendente' => $pendente,
        default => 'Opção inválida'
    };
    echo $resultado;
    echo '<hr>';


    // Com funções

    function aprovada()
    {
        return 'Compra aprovada';
    }
    function cancelada()
    {
        return 'Compra cancelada';
    }
    function pendente()
    {
        return 'Compra pendente';
    }

    $opcao = 'pendente';
    $resultado = match ($opcao) {
        'aprovada' => aprovada(),
        'anulada', 'cancelada' => cancelada(),
        'pendente' => pendente(),
        default => 'Opção inválida'
    };
    echo $resultado;
    echo '<hr>';
    ?>


</body>

</html>