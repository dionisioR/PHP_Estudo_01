<?php
// verifica se existe o cookie esperado
$valor = '[não existe cookie]';
if(!empty($_COOKIE['meu_cookie'])){
    $valor = $_COOKIE['meu_cookie'];
}
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

    <?php
    /*
    O que são cookies no PHP

    Cookies são um mecanismo para guardar dados do lado do cliente (browser).
    Podem ser usados para várias finalidades.
    Sessões de utilizador é a finalidade mais recorrente. 
    Mas podemos guardar outros tipos de informação.

    IMPORTANTE:
    Nunca devemos utilizar cookie para guardar informação sensível,
    uma vez que a leitura dos dados guardados pode ser feita com facilidade.
    Nunca devemos esperar que o cookie exista do lado do cliente, porque o mesmo pode
    remover os cookies ou alterar os seus valores esperados.

    Podemos criar mais de um cookie por cada site.
    */


    ?>
    
    <h1>COOKIES</h1>
    <hr>
    <h3>Valor do cookie 'meu_cookie': </h3>
    <p><?php echo '<strong>' . $valor . '</strong>'; ?></p>
</body>
</html>