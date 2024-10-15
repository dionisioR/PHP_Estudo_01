<?php
// Lógica de tratamentodo formulário
session_start();

// verifica se aconteceu um post
if($_SERVER['REQUEST_METHOD'] != "POST"){
    die('Acesso negado!!!');
}

// verifica se os valores existem
if(empty($_POST['text_valor_1']) || empty($_POST['text_valor_2'])){
    $_SESSION['erro'] = 'Os dois valores são de preenchimento obrigatório!!!';
    header('Location: index.php');
    return;
}

// verifica se os valores são numéricos
$valor1 = (int) $_POST['text_valor_1'];
$valor2 = (int) $_POST['text_valor_2'];

// echo gettype($valor1);
// echo gettype($valor2);

if(!is_numeric($valor1) || !is_numeric($valor2) || $valor1 < 1 || $valor2 < 1){
    $_SESSION['erro'] = 'Os valores informados devem ser numéricos e positivos!!!';
    header('Location: index.php');
    return;
}

// Resultado
$resultado = $valor1 * $valor2;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RD3W</title>
</head>
<body>
    
    <div class="wrapper">
        <p>O resultado da multiplicação de <?= $valor1 ?> por <?= $valor2 ?> é <?= $resultado ?></p>
    </div>
</body>
</html>