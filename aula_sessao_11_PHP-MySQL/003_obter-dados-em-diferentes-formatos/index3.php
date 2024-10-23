<?php
// OBTER DADOS EM DIFERENTES FORMATOS

/*
Por exemplo podemos definir uma classe produtos, cujas propriedades são as mesmas das colunas das tabelas.
*/

class Produtos
{
    public $id;
    public $produto;
    public $preco_unidade;
}

$host = "localhost";
$database = "loja_online";
$username = "root";
$password = "";

$conexao = new PDO("mysql:host=$host;dbname=$database", $username, $password);

$resultdo = $conexao->query("SELECT * FROM produtos")->fetchAll(PDO::FETCH_CLASS, "Produtos");  // <<<<<<

$conexao = null;

echo '<pre>';
print_r($resultdo);

/*
Repara como agora os resultados vêm em forma de Produto Objetct.
O carregamento dos dados para a classe é feito com a instanciação implícita de um objeto.
Sabemos que uma instanciação permite a execução automática do método __construct
*/