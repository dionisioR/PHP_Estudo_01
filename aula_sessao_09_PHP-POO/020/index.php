<?php
/*
AUTOLOAD DE CLASSES

Até agora vimos que para usar as classes que criamos é necessário fazer a importação do script ou scripts que contêm essas classes.
Vamos ver agora como é possível fazer o carregamento das classes de forma automática.
*/

// Metodologia tradicional
require_once("./classes/Animal.php");
require_once("./classes/Humano.php");

$animal = new Animal();
$humano = new Humano();

// Esta metodologia funciona muito bem se vc tiver poucas classes para carregar.
// Mas se vc tiver muitas classes, isso pode se tornar um problema.