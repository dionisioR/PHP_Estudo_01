<?php

/* 
Os números de contratos de uma empresa podem aparecer de
duas formas
AA-00000 - duas letras maiúsculas, um hífen e 5 algarismos
ou 
00000-AA - 5 algarismos, um hífen e duas letras maiúsculas
Validar os contratos da empresa.
*/

$contratos = [
    "FG-12567",
    "1267a-Th",
    "db-12456",
    "FH-68767",
    "94859-RT",
    "09-34898",
    "ER-1278",
    "TE-87458",
    "09238-FG",
    "83497 HG",
];

$total = 0;
foreach($contratos as $contrato){
    if(preg_match("/^([A-Z]{2}\-\d{5})|(\d{5}\-[A-Z]{2})$/", $contrato)){
        $total++;
    }
}

echo "Contratos válidos: <strong>$total</strong>";