<?php
// Podemos importar os dois scripts que têm namespaces diferentes e usar as duas classes com o mesmo nome, masque pertencem a realidades distintas

require_once('./index3.php');
require_once('./index2.php');

$operacao_loja = new Loja\Operacores();
$operacao_armazem = new Armazem\Operacores();

$operacao_loja->operacao_1();
$operacao_loja->operacao_2();

$operacao_armazem->operacao_1();
$operacao_armazem->operacao_2();