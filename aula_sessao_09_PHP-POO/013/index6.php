<?php
require_once('./index5.php');
use Estruturas_principais\Armazem;
use Estruturas_principais\Loja;

// Sempre que quiser criar novos objetos dentro deste script já não precisa mais fazer o uso da seguinte forma:
// $operacao_loja = new Loja\Operacores();
// $operacao_armazem = new Armazem\Operacores();

// A partir de agora, basta fazer o uso da seguinte forma:
$operacao_loja = new Loja();
$operacao_armazem = new Armazem();
$loja_x = new Loja();
$armazem_x = new Armazem();