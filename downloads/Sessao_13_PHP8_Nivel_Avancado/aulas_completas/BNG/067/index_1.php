<?php

/* 
Existem determinados códigos internos do mPDF para efetuar operações ou
apresentar informação específica. Vejamos:
*/

require_once('vendor/autoload.php');
use Mpdf\Mpdf;

$mpdf = new Mpdf([
    'mode' => 'utf-8',
    'format' => 'A4',
    'orientation' => 'P'
]);

$html = "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, ut?</p>";

$html .= "<pagebreak>"; // quebra de página

$html .= "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, ut?</p>";

$mpdf->WriteHTML($html);

$mpdf->Output();
