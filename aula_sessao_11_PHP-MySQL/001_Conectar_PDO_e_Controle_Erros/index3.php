<?php
// CONECTAR VIA PDO E CONTROLE DE ERROS

// Por padrão o PDO vai emitir uma exceção sempre que acontece um erro.

$database = 'loja_online*****';
$username = 'root';
$password = '';

try {
    // Etetuar a conexão
    $conexao = new PDO("mysql:host=localhost;dbname=$database", $username, $password);

    // definimos o modo como os erros serão tratados
    // neste caso, sendo o padrão, indica que o modo de erro é a apresentação de exceções.
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $estado = $conexao->getAttribute(PDO::ATTR_CONNECTION_STATUS);
    echo $estado;

    $conexao = null;
} catch (PDOException $e) {
    // vamos ver o que o erro contém
    echo '<pre>';
    print_r($e);
    echo '</pre>';
    echo '<hr>';
    echo '<pre>';
    print_r($e->errorInfo);
    echo '</pre>';
    echo '<hr>';
    echo "ERRO: " . $e->getMessage();
}

/*
Preparar o nosso código contra os erros é fundamental,
Não iremos par agora aprofundar muito esta matéria, mas sempre que necessário iremos voltar aos erros..
*/
