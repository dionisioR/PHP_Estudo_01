<?php
session_start();
unset($_SESSION['apelido']);
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RD3W</title>
</head>
<body>
    <?php require_once('./nav.php') ?>
    <hr>
    <h2>O valor "APELIDO" foi REMOVIDO à sessão.</h2>
</body>
</html>