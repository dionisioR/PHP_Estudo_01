<?php
session_start();

// remove todas as variáveis da sessão
session_unset();
// destrói a sessão
session_destroy();
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
    <h2>Todas as sessões foram destruídas.</h2>
</body>
</html>