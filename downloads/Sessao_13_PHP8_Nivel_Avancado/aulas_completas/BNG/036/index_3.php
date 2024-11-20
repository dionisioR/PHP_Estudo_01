<?php

// pretendo saber se $valor é apenas 
// constituído por dígitos, mas começa com o número 1

$valor = "145365746";
var_dump(preg_match("/^[1]{1}\d+$/", $valor));   // sim

// o $valor começa com o algarismo 9 e tem no total 10 algarismos
$valor = "923456789";
var_dump(preg_match("/^[9]{1}\d{8}$/", $valor));   // sim

// o $valor contém duas letras minúsculas, seguido de um hífen e 6 dígitos.
$valor = "ab-123456";
var_dump(preg_match("/^[a-z]{2}\-\d{6}$/", $valor));   // sim

// o $valor contém, pelo menos, uma letra maiúscula, uma minúscula e um dígito
$valor = "PalavraPasse05";
var_dump(preg_match("/(?=.*[A-Z])(?=.*[a-z])(?=.*\d)/", $valor));   //sim

/* 
Como podes facilmente perceber, as expressões regulares podem tornar-se
bastante complexas. Este vídeo não pretende cobrir todos os exemplos.
Aliás, isso sería um módulo completo para podermos aprofundar as expressões
regulares.

Podes usar editores/validadores online que te vão permitir perceber melhor
os resultados que podes obter.

https://www.phpliveregex.com/
https://regex101.com/

*/