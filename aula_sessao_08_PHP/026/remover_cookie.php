<?php
// remover o cookie
$nome = 'meu_cookie';
setcookie($nome, '', time() - 3600);
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
    <h1>Remover Cookie</h1>
</body>
</html>