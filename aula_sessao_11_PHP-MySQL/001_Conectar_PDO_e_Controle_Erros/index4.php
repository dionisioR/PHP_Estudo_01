<?php
// CONECTAR VIA PDO E CONTROLE DE ERROS

// Não temos qualquer erro na conexão
// Neste exemplo vamos tirar o bloco try/catch

$database = 'loja_online';
$username = 'root';
$password = '';

$conexao = new PDO("mysql:host=localhost;dbname=$database", $username, $password);
$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Temos um erro na query. Esta instrução não está completa.
$resultado = $conexao->query('select');  // erro

$conexao = null;

/*
PDO::ERRMODE_SILENT - Não apresenta erros
PDO::ERRMODE_WARNING - Apresenta avisos
PDO::ERRMODE_EXCEPTION - Dispara exceções que podem ser captadas no catch
*/
