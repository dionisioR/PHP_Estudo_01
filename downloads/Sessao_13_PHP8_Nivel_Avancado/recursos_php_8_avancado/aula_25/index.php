<?php

define('CONTROL', true);

// router
$a = "";
if(isset($_GET['a'])){
    $a = $_GET['a'];
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registo de logs</title>
    <style>
        .center{
            text-align: center;
        }
    </style>
</head>
<body>

    <?php 

    // nav
    require_once('nav.php');
    
    // pages
    switch ($a) {
        case '1':
            
            require_once('pagina1.php');
            break;

        case '2':
            
            require_once('pagina2.php');
            break;

        case '3':
            
            require_once('pagina3.php');
            break;
        
        default:
            echo '<hr><h1 class="center">Início</h1>';
            break;
    }

    ?>

</body>
</html>