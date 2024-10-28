<?php
// dados da base de dados
$database = 'nova_base_dados';
$username = 'root';
$password = '';

// conexão
$conexao = new PDO("mysql:host=localhost",$username,$password);

// drop a base de dados caso ela exista
$sql = "DROP DATABASE IF EXISTS $database";
$conexao->exec($sql);

// criar a base de dados
$sql = "CREATE DATABASE $database";
$conexao->exec($sql);

// selecionar a base de dados
$conexao->exec("USE $database");

// criar a tabela
$sql = "CREATE TABLE usuarios (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(30) NULL DEFAULT NULL,
    email VARCHAR(50) NULL DEFAULT NULL,
    senha VARCHAR(50) NULL DEFAULT NULL,
    created_at DATETIME NULL DEFAULT CURRENT_TIMESTAMP
)";
$conexao->exec($sql);

// destruir a conexão
$conexao = null;
echo 'FIM';