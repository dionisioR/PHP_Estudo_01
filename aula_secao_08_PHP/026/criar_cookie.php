<?php
 // criar o cookie
 $nome = 'meu_cookie';
 $valor = 'Conteúdo do meu cookie';
 $expiração = 3600; // 1 hora
 setcookie($nome, $valor, time() + $expiração);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    require_once('./nav.php');
    ?>
    <h1>Criar Cookie</h1>
</body>
</html>