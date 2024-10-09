<?php
// DATA TYPES - TIPOS DE DADOS
// -------------------------------------------------
/*
As variáveis (assim como as constantes) guardam determinados tipos de dados.
No PHP as variáveis não são tipadas.
Isso pode ser mais complexo de processar e pode levar a erros.
*/

// TIPO DE DADOS ESCALARES
// -------------------------------------------------

// bool / boolean - Aceita valores verdadeiro (true) ou falso (false)
$apresentar_dados = true;
echo "Bool: "  . $apresentar_dados . '<hr>';

// int / integer - Aceita números inteiros
$valor = 10;
echo $valor . '<br>';
$valor = 125127651;
echo $valor . '<br>';
$valor = -555;
echo $valor . '<hr>';

// float / double - Aceita números decimais [ponto flutuante]
$valor = 10.25;
echo $valor . '<br>';
$valor = 125127651.25;
echo $valor . '<br>';
$valor = -555.25;
echo $valor . '<hr>';

// string - aceita valores alfanuméricos [texto, números, caracteres especiais, letras, palavras, frases, etc]
$nome = 'RD3W';
echo $nome . '<br>';
$url = "https://www.rd3w.com.br";
echo $url . '<br>';
$frase = "O PHP é uma linguagem de programação incrível!";
echo $frase . '<br>';
$letra = 'A';
echo $letra . '<br>';
$caracter_especial = '@';
echo $caracter_especial . '<hr>';

// Apresenta o tipo de dado de uma variável
echo gettype($apresentar_dados) . '<br>';
echo gettype($valor) . '<br>';
echo gettype($nome) . '<br>';
echo gettype($url) . '<br>';
echo gettype($frase) . '<br>';
echo gettype($letra) . '<br>';
echo gettype($caracter_especial) . '<hr>';

// VARDUMP - Apresenta o tipo de dado e o valor de uma variável
var_dump($apresentar_dados);
echo '<br>';
var_dump($valor);
echo '<br>';
var_dump($nome);
echo '<br>';
var_dump($url);
echo '<br>';
var_dump($frase);
echo '<br>';
var_dump($letra);
echo '<br>';
var_dump($caracter_especial);
echo '<hr>';