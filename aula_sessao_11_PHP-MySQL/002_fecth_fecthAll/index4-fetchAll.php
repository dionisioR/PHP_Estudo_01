<?php
// OBTER OS RESULTADOS COM EXECUÇÃO DE QUERIES

// configurações
$host = "localhost";
$database = "loja_online";
$username = "root";
$password = "";

// conexão
$conexao = new PDO("mysql:host=$host;dbname=$database",$username,$password);

// utilização do fetch
$resultado = $conexao->query("SELECT * FROM produtos")->fetchAll();

// fetchAll() vai buscar todos os elementos de uma vez
foreach ($resultado as $item) {
    echo "<strong>Produto</strong>: " .  $item['produto'] . '<br>';
}

// fecha a conexão
$conexao = null;