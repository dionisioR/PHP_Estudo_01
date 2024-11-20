<?php

/* 
Vamos complicar um pouco as coisas.
As expressões regulares são muito poderosas nos seus padrões.

Imagina que quero verificar se uma variável tem pelo menos, um dígito.
*/

echo '<pre>';

$valor = "abd1efg";
var_dump(preg_match("/[0-9]/", $valor));    // sim

$valor = "aaabbb";
var_dump(preg_match("/[0-9]/", $valor));    // nao

// podemos fazer o mesmo com:
$valor = "abc10twe";
var_dump(preg_match("/\d/", $valor));    // sim

// queremos saber se $valor começa por um dígito.
$valor = "1sdghsdgh";
var_dump(preg_match("/^\d/", $valor));  // sim

// quero saber se $valor termina com um dígito.
$valor = "1sdghsdgh0";
var_dump(preg_match("/\d$/", $valor));  // sim

// quero saber se $valor contém apenas dígitos, independentemente do número de caracteres
$valor = "2346x786";
var_dump(preg_match("/^\d+$/", $valor));  // nao

// quero saber se $valor contém apenas e somente 4 dígitos.
$valor = "2352";
var_dump(preg_match("/^\d{4}$/", $valor));  // sim

$valor = "23052";
var_dump(preg_match("/^\d{4}$/", $valor));  // nao


