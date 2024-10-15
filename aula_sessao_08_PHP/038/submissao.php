<?php
if($_SERVER["REQUEST_METHOD"] != "POST"){
    die('Acesso inválido');
}

echo '<pre>';
print_r($_POST);

?>
<a href="index.php">Voltar</a>