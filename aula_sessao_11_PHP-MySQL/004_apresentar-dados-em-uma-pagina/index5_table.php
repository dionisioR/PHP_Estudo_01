<?php
// APRESENTAR OS DADOS EM UMA TABELA HTML

// Vamos fazer um exercício muito simples.
// Carregar os dados dos clientes.
// Só vamos carregar os primeiros 20.
// Depois vamos apresentar numa tabela formatada com bootstrap
// e vamos apresentar o total de clientes listados.

$host = "localhost";
$database = 'loja_online';
$username = 'root';
$password = '';

try {
    $conexao = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $username, $password);
    $resultado = $conexao->query("SELECT * FROM clientes LIMIT 20")->fetchAll(PDO::FETCH_OBJ);
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
            <div class="col">
             
            <h3>Clientes</h3>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Sexo</th>
                        <th>Data Nasc.</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Endereço</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($resultado as $cliente) {
                        echo '<tr>';
                        echo '<td>' . $cliente->nome . '</td>';
                        echo '<td>' . ($cliente->sexo == 'm' ? "Masculino" : "Feminino") . '</td>';
                        echo '<td>' . substr($cliente->data_nascimento, 0, 10 ) . '</td>';
                        echo '<td>' . $cliente->email . '</td>';
                        echo '<td>' . $cliente->telefone . '</td>';
                        echo '<td>' . $cliente->morada . ' - ' . $cliente->cidade . '</td>';
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>

            <p class="my-5">Total de clientes: <strong><?php echo count($resultado); ?></strong></p>
             
            </div>
        </div>
    </div>
</body>

</html>