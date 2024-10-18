<?php
// Exemplo de array com 15 nomes e identificadores de gênero ('m' ou 'f')
$dados = [
    ['m', 'Joaquim José'],
    ['f', 'Maria Joaquina'],
    ['m', 'Carlos Alberto'],
    ['f', 'Ana Beatriz'],
    ['m', 'Pedro Henrique'],
    ['f', 'Juliana Martins'],
    ['g', 'João Paulo'],
    ['f', 'Fernanda Silva'],
    ['m', 'José Ricardo'],
    ['f', 'Camila Alves'],
    ['m', 'Lucas Gabriel'],
    ['f', 'Clara Santos'],
    ['m', 'Mateus Borges'],
    ['f', 'Carolina Mota'],
    ['m', 'Guilherme Pereira']
];

//-------------------------------------------------
require('./Humanos.php');

$humanos = new Humanos();

foreach ($dados as $dado) {
    $humanos->definir($dado[0], $dado[1]);
}

$masculino = $humanos->get_masculino();
$feminino = $humanos->get_feminino();
$desconhecido = $humanos->get_desconhecido();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RD3W</title>
</head>

<body>

    <h1>Masculino</h1>
    <ul>
        <?php
        foreach ($masculino as $nome) {
            echo "<li>$nome</li>";
        }
        ?>
    </ul>

    <h1>Feminino</h1>
    <ul>
        <?php
        foreach ($feminino as $nome) {
            echo "<li>$nome</li>";
        }
        ?>
    </ul>

    <h1>Desconhecido</h1>
    <ul>
        <?php
        foreach ($desconhecido as $nome) {
            echo "<li>$nome</li>";
        }
        ?>
    </ul>


</body>

</html>