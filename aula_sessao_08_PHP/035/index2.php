<?php
// $_GET
// Vamos utilizar o endereço http://localhost.com/index2.php?id=100

// Para captar um determinado valor da query string, recorremos à chave do array associativo da super global $_GET

// Exemplo 2
// Cuidado: se a variável não existir vai surgir um erro
echo $_GET['id']; 

// Devemos sempre verificar se existe e depois captar esse parâmetro

$valor = null;
// isset
// A função isset verifica se uma variável foi definida
// Se a variável foi definida, a função retorna true
// Se a variável não foi definida, a função retorna false 
if(isset($_GET['id'])){
    $valor = $_GET['id'];
}
echo '<br>';
echo 'Valor: ' . $valor;


