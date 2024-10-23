<?php
// OBTER DADOS EM DIFERENTES FORMATOS

/*
Em vez do método fecthAll sem qualquer parâmetro, podemos especificar de que forma queremos os dados.
Observação: Esta parametrização também vale para o fetch()

PDO::FETCH_BOTH - É a opção padrão. Por isso existem as chaves numéricas e as chaves alfanuméricas misturadas

PDO::FETCH_NUM - Apenas o array com chaves númericas com índices. É atribuída uma chave numérica sequencial para cada coluna.

PDO::FETCH_ASSOC - Apenas array associativo. As chaves são os nomes das colunas da tabela;

PDO::FETCH_OBJ - Retorna os valores organizados num objetoo anônimo que que cada elemento contém as propriedades com os nomes das colunas da tabela.

Existem outras opções
*/

$host = "localhost";
$database = "loja_online";
$username = "root";
$password = "";

$conexao = new PDO("mysql:host=$host;dbname=$database", $username, $password);
// $resultdo = $conexao->query("SELECT * FROM produtos")->fetchAll(PDO::FETCH_BOTH);
// $resultdo = $conexao->query("SELECT * FROM produtos")->fetchAll(PDO::FETCH_NUM);
// $resultdo = $conexao->query("SELECT * FROM produtos")->fetchAll(PDO::FETCH_ASSOC);
$resultdo = $conexao->query("SELECT * FROM produtos")->fetchAll(PDO::FETCH_OBJ);
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