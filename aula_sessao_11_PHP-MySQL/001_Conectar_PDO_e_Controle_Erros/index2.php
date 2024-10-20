<?php
// CONECTAR VIA PDO E CONTROLE DE ERROS

// O PDO contém mecanismos que nos permitem identificar e tratar erros de conexão, para a eventualidade de acontecerem

// 1. definir as propriedades de conexão
$database = 'loja_online*****';  
$username = 'root';
$password = '';

// Vamos colocar a ligação dentro de um bloco try... catch
try{
    // Etetuar a conexão
    $conexao = new PDO("mysql:host=localhost;dbname=$database",$username,$password);

    // Verifica se a conexão foi estabelecida corretamente
    $estado = $conexao->getAttribute(PDO::ATTR_CONNECTION_STATUS);
    echo $estado; 

    $conexao = null;
}catch (PDOException $e) {
    echo "ERRO: " . $e->getMessage();
}



/*
vamos deliberadamente colocar um erro no nome da base de dados

O bloco catch apanhou uma PDOException.
Esta exceção contém informações precisas sobre o erro.
ERRO: SQLSTATE[HY000] [1049] Unknown database 'loja_online*****'
*/

