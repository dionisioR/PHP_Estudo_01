<?php
// importar a classe Database e configurações
use RD3W\Database;

require_once("./Database.php");

// configurações
$config = [
    "host" => "localhost",
    "database" => "base_teste",
    "username" => "root",
    "password" => "",
];

// instanciar a classe Database
$database = new Database($config);

// resultados
$sql = "SELECT * FROM clientes";
$resultados = $database->execute_query($sql);

// ver os dados
// echo "<pre>";
// print_r($resultados);
// echo "</pre>";

// results é o índice do array associativo gerado pela consulta do PDO
$resultados = $resultados->results;
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
    <header class="m-5 p-5 text-center">
        <h1 class="display-3">Dados dos clientes</h1>
    </header>
    <main class="py-5 container">

        <!-- Apresentação dos dados -->
        <?php

        if (count($resultados) == 0) {
            echo "<p class='alert alert-danger'>Não foram encontrados registros</p>";
        } else {
            echo "<table class='table table-striped'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>Nome</th>";
            echo "<th>Email</th>";
            echo "<th>Data de cadastro</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            foreach ($resultados as $cliente) {
                echo "<tr>";
                echo "<td>{$cliente->nome}</td>";
                echo "<td>{$cliente->email}</td>";
                echo "<td>{$cliente->created_at}</td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
        }

        ?>
        <div class='alert alert-primary'>
            <p><strong>Quantidade de registros: </strong> <?= count($resultados) ?> registros. </p>
        </div>";

    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>