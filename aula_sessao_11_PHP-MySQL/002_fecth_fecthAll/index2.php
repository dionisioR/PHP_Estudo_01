<?php
// OBTER OS RESULTADOS COM EXECUÇÃO DE QUERIES

// Os métodos fetch() e fetchAll() diferem no seguinte aspecto:
// - fetch() vai buscar o próximo elemento da coleção de dados
// - fetchAll() vai buscar todos os elementos de uma vez

// configurações
$host = "localhost";
$database = "loja_online";
$username = "root";
$password = "";

// conexão
$conexao = new PDO("mysql:host=$host;dbname=$database",$username,$password);

// utilização do fetch
$resultado = $conexao->query("SELECT * FROM produtos")->fetch();
echo '<pre>';
print_r($resultado);

// fecha a conexão
$conexao = null;