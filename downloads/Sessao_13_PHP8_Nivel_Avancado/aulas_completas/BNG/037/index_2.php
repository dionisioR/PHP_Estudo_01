<?php

/* 
O número de identificação fiscal português, é um número que identifica
pessoas e empresas perante as autoridades tributárias.
As pessoas coletivas (empresas) têm NIF começado por 5 ou 9.
Todos os NIFs têm 9 algarismos no total.
*/

$nifs = [
    236342653,
    153165236,
    503478723,
    141498452,
    957458738,
    172826367,
    285673742,
    503009493,
    258949858,
];

$nifs_empresas = 0;
$nifs_individuais = 0;
foreach($nifs as $nif){
    if(preg_match("/^[5|9]{1}\d{8}$/", $nif)){
        $nifs_empresas++;
    } else {
        $nifs_individuais++;
    }
}

echo "Empresas: <strong>$nifs_empresas</strong><br>";
echo "Individuais: <strong>$nifs_individuais</strong><br>";