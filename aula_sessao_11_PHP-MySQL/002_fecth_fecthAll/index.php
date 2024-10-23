<?php
// OBTER OS RESULTADOS COM EXECUÇÃO DE QUERIES

// Vamos obter dados a partir da base de dados, e ver como o php os pode receber

// configurações
$host = "localhost";
$database = "loja_online";
$username = "root";
$password = "";

// conexão
$conexao = new PDO("mysql:host=$host;dbname=$database",$username,$password);

// comunicação simples
$resultado = $conexao->query("SELECT * FROM produtos")->fetchAll();
echo '<pre>';
print_r($resultado);

// fecha a conexão
$conexao = null;