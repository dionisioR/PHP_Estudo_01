<?php
// $_GET
// Vamos utilizar o endereço http://localhost/php_estudo_01/aula_secao_08_PHP/035/index3.php?id=100&produto=moto

// Para captar um determinado valor da query string, recorremos à chave do array associativo da super global $_GET

// isset
// A função isset verifica se uma variável foi definida
// Se a variável foi definida, a função retorna true
// Se a variável não foi definida, a função retorna false 

$id = isset($_GET['id']) ? $_GET['id'] : null;
$produto = isset($_GET['produto']) ? $_GET['produto'] : null;

echo 'ID: ' . $id . '<br>';
echo 'PRODUTO: ' . $produto . '<br>';

/*
Vejamos a informação disponível nas ferramentas do programador
Network > Name
Headers > Métodos GET e Payload

Esta é uma das formas que podes usar para passar informações entre páginas.
Cuidado, nunca passes informações que possam ser sensíveis ao funcionamento da tua aplicação.
Outra nota: Existem determinados caracteres que entram em conflito com uma query string.
Por exemplo o &, o espaço, o < e > 
Para evitar problemas, usa a função urlencode

*/

