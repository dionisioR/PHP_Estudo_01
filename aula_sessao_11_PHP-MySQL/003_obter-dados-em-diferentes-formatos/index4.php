<?php
// OBTER DADOS EM DIFERENTES FORMATOS

/*
Podemos acrescentar propriedades e métodos na classe e executar operações quando os dados são guardados.

Neste caso adicionei uma propriedade que não existe na base de dados (preço por dúzia)

Como sei que o valor de cada unidade, o contrutor vai multiplicar esse valor por doze.
*/

class Produtos
{
    public $id;
    public $produto;
    public $preco_unidade;
    public $preco_duzia;

    public function __construct()
    {
        $this->preco_duzia = $this->preco_unidade * 12;
    }
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