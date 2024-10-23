<?php
// Apresentar dados a partir de uma query

// Agora com a query bem organizada, voltamos a ter o resultado esperado.
// Mas vamos acrescentar na query uma cláusula WHERE.
// Ela vai indicar que nós queremos os produtos cujo ID seja superior a 100. 
// Não existe nenhum produto nessa situação.
// Então vamos ter o retorno de $resultado = []
// Não existe produtos na coleção

$host = "localhost";
$database = 'loja_online';
$username = 'root';
$password = '';

try {
    $conexao = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $username, $password);
    $resultado = $conexao->query("SELECT * FROM produtos where id > 100")->fetchAll(PDO::FETCH_OBJ);
} catch (PDOException $err) {
    $erro =  "Erro na conexão!!!";
}

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
                if (!empty($erro)) {
                    echo '<p class="alert alert-danger text-center">' . $erro . '</p>';
                } else {

                    if (count($resultado) == 0) {
                        echo '<h1>Não foram encontrados produtos...</h1>';
                    } else {

                        echo '<h1>Produtos</h1>';
                        echo '<ul class="list-group">';
                        foreach ($resultado as $produto) {
                            echo '<li class="list-group-item">' . $produto->produto . '<br> R$' . $produto->preco_unidade . '</li>';
                        }
                        echo '</ul>';
                    }
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>