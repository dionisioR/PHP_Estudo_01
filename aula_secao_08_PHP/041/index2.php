<?php
// validar se tem número de caracteres válidos (3 a 20)
$valor = "Uma string de exemplo para teste";
if (strlen($valor) < 3 && strlen($valor) > 20) {
    echo "O valor tem que ter entre 3 e 20 caracteres";
} else {
    echo "O valor tem o número de caracteres válido";
}
echo '<hr>';

// validar se é um email válido
$email = "teste@exemplo.com";
var_dump(filter_var($email, FILTER_VALIDATE_EMAIL));
echo '<br>';
$email = "testeexemplo.com";
var_dump(filter_var($email, FILTER_VALIDATE_EMAIL));
echo '<hr>';

// validar se é uma URL válida
$url = "https://www.google.com";
var_dump(filter_var($url, FILTER_VALIDATE_URL));
echo '<br>';
$url = "www.google.com";
var_dump(filter_var($url, FILTER_VALIDATE_URL));
echo '<hr>';

// filter_var retorna o valor caso seja válido, ou false se o valor não estiver de acordo com a validação pretendida.

// validar se um telefone começa por 9 e tem 9 digitos
var_dump(preg_match("/^9{1}\d{8}$/","966321456"));
echo '<br>';
var_dump(preg_match("/^9{1}\d{8}$/","266321456"));
echo '<br>';
var_dump(preg_match("/^9{1}\d{8}$/","123"));
echo '<hr>';
// 1 - expressão regular confirma o valor analisado
// 0 - expressão regular não confirma o valor analisado
// false - erro na expressão regular / aconteceu algum erro
