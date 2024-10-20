<?php
// CONECTAR VIA PDO E CONTROLE DE ERROS

// Vamos colocar propositadamente um erro nas configurações.
// Devemos ter sempre em conta a possibilidade de ter erros na execução

// 1. definir as propriedades de conexão
$database = 'loja_online_nao_existe';  // ESTA BASE DE DADOS NÃO EXISTE
$username = 'root';
$password = '';

// Etetuar a conexão
$conexao = new PDO("mysql:host=localhost;dbname=$database",$username,$password);

// Verifica se a conexão foi estabelecida corretamente
$estado = $conexao->getAttribute(PDO::ATTR_CONNECTION_STATUS);
echo $estado; 

$conexao = null;

/*
Vamos ser surpreendidos por um erro.
Vejamos o que o erro diz:
Fatal error: Uncaught PDOException: SQLSTATE[HY000] [1049] Unknown database 'loja_online_nao_existe' in C:.......
*/

