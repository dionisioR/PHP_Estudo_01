<?php
// Neste exemplo muito simples vamos usar cookie para definir o tema claro ou escuro do nosso site

// verifica se existe um cookie com o tema
$theme = !empty($_COOKIE['theme']) ? $_COOKIE['theme'] : 'light'

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RD3W</title>
    <link rel="shortcut icon" href="../../img/logo.jpg" type="image/jpg">

    <style>
        body{
            margin: 0;
            padding: 0;
        }
        .light{
            background-color: #fff;
            color: #000;
        }
        .dark{
            background-color: #000;
            color: #fff;
        }
        a{
            color:red;
        }
    </style>

</head>
<body class="<?= $theme ?>">
    
<a href="theme_dark.php">Dark mode</a> | <a href="theme_light.php">Light mode</a>

<h1>Exemplo simples de tema com cookie</h1>
<p>
    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum sed possimus perferendis repudiandae sapiente alias libero assumenda, quae numquam esse. Sed deleniti quisquam culpa aut quasi iste dolores ducimus quos.
</p>
<p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, corrupti quos quo doloremque laborum eius tenetur quisquam facere, numquam autem, sequi rerum ex neque debitis magnam cupiditate beatae quis deleniti.
</p>

    <?php
   


    ?>
    
    <h1>COOKIES</h1>
    <hr>

</body>
</html>