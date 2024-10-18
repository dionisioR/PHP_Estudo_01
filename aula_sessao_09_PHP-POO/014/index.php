<?php
require_once('./Numeros.php');
$n1 = new Numero(5);
echo '<pre>';
echo $n1->getNumero() . '<br>';
echo $n1->par_ou_impar() . '<br>';
echo $n1->raiz_quadrada() . '<br>';
print_r($n1->tabuada());
echo '</pre>';
echo '<hr>';

$n2 = new Numero(7);
echo '<pre>';
echo $n2->getNumero() . '<br>';
echo $n2->par_ou_impar() . '<br>';
echo $n2->raiz_quadrada() . '<br>';
print_r($n2->tabuada());
echo '</pre>';
echo '<hr>';

$n3 = new Numero(8);
echo '<pre>';
echo $n3->getNumero() . '<br>';
echo $n3->par_ou_impar() . '<br>';
echo $n3->raiz_quadrada() . '<br>';
print_r($n3->tabuada());
echo '</pre>';
echo '<hr>';

