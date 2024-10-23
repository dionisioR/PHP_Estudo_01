<?php
// Apresentar dados a partir de uma query

$host = "localhost";
$database = 'loja_online';
$username = 'root';
$password = '';
$conexao = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $username, $password);
$resultado = $conexao->query("SELECT * FROM produtos")->fetchAll(PDO::FETCH_OBJ);
$conexao = null;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RD3W</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-5">
            <?php
            if(count($resultado) == 0){
                echo '<h1>Não há produtos cadastrados</h1>';
            } else {
                echo '<h1>Produtos</h1>';
                echo '<ul class="list-group">';
                foreach($resultado as $produto){
                    echo '<li class="list-group-item">' . $produto->produto . '<br> R$' . $produto->preco_unidade. '</li>';
                }
                echo '</ul>';
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>