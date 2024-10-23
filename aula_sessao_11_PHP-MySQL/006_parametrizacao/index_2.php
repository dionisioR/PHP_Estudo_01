<?php

// dados de ligação
$database = 'loja_online';
$username = 'root';
$password = '';

// conexao
$conexao = new PDO("mysql:host=localhost;dbname=$database;charset=utf8", $username, $password);


$parametros = [
    ':u' => $_POST['text_username'],
    ':p' => $_POST['text_passwrd']
];

$sql = "SELECT * FROM usuarios WHERE username = :u AND passwrd = :p";
$stmt = $conexao->prepare($sql);
$stmt->execute($parametros);
$resultados = $stmt->fetchAll(PDO::FETCH_OBJ);

// fechar a ligação
$conexao = null;

echo '<pre>';
print_r($resultados);
echo '<br>';

// analisar se houve login válido
if(count($resultados) == 0){
    echo 'Login inválido.';
} else {
    echo 'Login OK!';
}

//--------------------------------------------------------------------
// IMPORTANTE
//--------------------------------------------------------------------
// agora vamos colocar a seguinte expressão na password: ' or ''='
//--------------------------------------------------------------------


echo '<br><br>' . $sql;