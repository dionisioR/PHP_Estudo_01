
<?php
// todos os scripts devem ter o início de sessão antes de qualquer output do php
session_name("minha_sessao");
session_set_cookie_params(180); // 3 minutos
session_start();

// O valor do nome e apelido vai ser definido tendo em atenção a existência ou não das variáveis na super globaç $_SESSION
$nome = !empty($_SESSION['nome']) ? $_SESSION['nome'] : 'Não definido';
$apelido = !empty($_SESSION['apelido']) ? $_SESSION['apelido'] : 'Não definido';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RD3W</title>
    <link rel="shortcut icon" href="../../img/logo.jpg" type="image/jpg">

</head>
<body>
    <?php require_once('./nav.php'); ?>
    <h1>Sessão em PHP</h1>
    <hr>
    <h3>Valor da variável 'nome': </h3>
    <p><?php echo '<strong>' . $nome . '</strong>'; ?></p>

    <h3>Valor da variável 'apelido': </h3>
    <p><?php echo $apelido; ?></p>
    <?php

    ?>
    
</body>
</html>