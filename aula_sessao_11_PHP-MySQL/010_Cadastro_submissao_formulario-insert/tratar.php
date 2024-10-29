<?php

// importar a classe Databae e configurações
use RD3W\Database;
require_once("./Database.php");

// Configurações da base de dados
$config = [
    "host" => "localhost",
    "database" => "base_teste",
    "username" => "root",
    "password" => "",
];

// instanciar a classe Database
$database = new Database($config);

// Parâmetros
$params = [
    ":nome" => $_POST['text_nome'],
    ":email" => $_POST['text_email'],
];

// criando a query
$sql = "INSERT INTO clientes (nome, email, created_at) VALUES (:nome, :email, NOW())";

// executar a query e inserir os dados no banco
$result = $database->execute_non_query($sql, $params);

// verificar se a query foi executada com sucesso
// if ($result) {
//     echo "Registro inserido com sucesso!";
//     echo "<pre>";
//     print_r($result);
//     echo "</pre>";
// } else {
//     echo "Erro ao inserir o registro!";
// }

// redirecionar para a página de cadastro
header("Location: index.php");