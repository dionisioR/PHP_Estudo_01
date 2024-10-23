<?php
// OBTER DADOS EM DIFERENTES FORMATOS

$host = "localhost";
$database = "loja_online";
$username = "root";
$password = "";

$conexao = new PDO("mysql:host=$host;dbname=$database", $username, $password);
$resultdo = $conexao->query("SELECT * FROM produtos")->fetchAll();
$conexao = null;

// Quando chegamos até aqui, a conexão já foi feita, já foi executada a query que foi buscar todos os dados da tabela produto.
echo '<pre>';
print_r($resultdo);

/*
Como podemos observar existe um conjunto de informações duplicadas

Array
(
    [0] => Array
        (
            [id] => 1
            [0] => 1
            [produto] => Abacate
            [1] => Abacate
            [preco_unidade] => 12.55
            [2] => 12.55
            ***

O primeiro produto da coleção (assim como os restantes), vem em formato de array que, simultaneamente tem chaves númericas e chaves alfanuméricas - um array associativo.

Não precisamos dessa repetição.
Então vamos dizer ao PDO, como queremos que os dados venham.
*/