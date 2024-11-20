<?php

/* 
Podemos usar posicionamento absoluto para colocar o texto onde quisermos.
*/

require_once('vendor/autoload.php');
use Mpdf\Mpdf;

// vamos colocar a página num formato horizontal.
$mpdf = new Mpdf([
    'mode' => 'utf-8',
    'format' => 'A4',
    'orientation' => 'P'
]);

$html = '<p style="position: absolute; top: 20px; left: 20px;">TOPO ESQUERDA</p>';
$html .= '<p style="position: absolute; top: 20px; left: 650px;">TOPO DIREITA</p>';
$html .= '<p style="position: absolute; top: 1070px; left: 20px;">FUNDO ESQUERDA</p>';
$html .= '<p style="position: absolute; top: 1070px; left: 650px;">FUNDO DIREITA</p>';

$mpdf->WriteHTML($html);

$mpdf->Output();
