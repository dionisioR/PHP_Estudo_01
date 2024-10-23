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
$resultado = $conexao->query("SELECT * FROM produtos");

// fetch() vai buscar o próximo elemento da coleção de dados
while ($linha = $resultado->fetch()) {
    echo "Produto:" .  $linha['produto'] . '<br>';
}

// fecha a conexão
$conexao = null;