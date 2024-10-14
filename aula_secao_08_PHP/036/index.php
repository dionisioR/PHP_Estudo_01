<?php
// TRATAMENTO DE FORMULÁRIOS - INTRODUÇÃO

/*
    Uma das áreas onde o PHP tem uma utilização muito grande é no tratamento de submissão de formulários.
    Quando tems um formulário escrito em HTML e pretendes que os dqdos preeenchidos sejam tratados do lado do servidor
    para, eventualmente, serem guardados numa base de dados, é aqui que o PHP entra no sistema.

    Vamos analisar o seguinte formulário de login.
    */
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RD3W</title>
    <link rel="shortcut icon" href="../../img/logo.jpg" type="image/jpg">
    <style>
        .wrapper {
            margin: 50px auto;
            width: 300px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            display: block;
            margin-bottom: 10px;
            padding: 5px;
            width: 100%;
        }
        input[type='submit']{
            width: 100% !important;
            padding: 10px !important;
            margin: 0px auto;
        }
    </style>

</head>

<body>
    <h1>Tratamento de Formulário</h1>
    <?php

    ?>

    <div class="wrapper">
        <form action="submissao2.php" method="post">
            <label for="username">Usuário</label>
            <input type="text" name="username">
            <label for="password">Senha</label>
            <input type="password" name="password">
            <input type="submit" value="Entrar">
        </form>
    </div>

</body>

</html>