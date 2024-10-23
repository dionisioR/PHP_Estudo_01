<?php
// OBTER DADOS EM DIFERENTES FORMATOS

/*
Uma nota final sobre esta matéria.
Existem outras formas de indicar ao PDO como deve devolver os resultados
*/

$host = "localhost";
$database = "loja_online";
$username = "root";
$password = "";

$conexao = new PDO("mysql:host=$host;dbname=$database", $username, $password);

$resultdo = $conexao->query("SELECT * FROM produtos");
$resultdo->setFetchMode(PDO::FETCH_ASSOC);

$conexao = null;

while($linha = $resultdo->fetch()){
    echo "Produto:" .  $linha['produto'] . ' Preço: ' . $linha['preco_unidade'] . '<br>';
}