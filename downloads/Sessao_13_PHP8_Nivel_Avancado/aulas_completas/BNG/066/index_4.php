<?php

/* 
Vamos definir propriedades da página: modo, formato e orientação
*/

require_once('vendor/autoload.php');
use Mpdf\Mpdf;

// vamos colocar a página num formato horizontal.
$mpdf = new Mpdf([
    'mode' => 'utf-8',
    'format' => 'A4',
    'orientation' => 'L'
]);

// ou

$mpdf = new Mpdf([
    'mode' => 'utf-8',
    'format' => 'A4-L',
]);

// ou

$mpdf = new Mpdf([
    'mode' => 'utf-8',
    'format' => [200,100],
]);


$html = '<h1>Título h1</h1>';
$html .= '<h2>Título h2</h2>';
$html .= '<h3>Título h3</h3>';
$html .= '<h4>Título h4</h4>';
$html .= '<h5>Título h5</h5>';
$html .= '<h6>Título h6</h6>';
$html .= '<p>Este texto está num parágrafo de HTML.</p>';
$html .= '<p style="color: red;">Este texto está a vermelho.</p>';
$html .= '<p style="font-family: Verdana; font-weight: bold">Escrever com letra Verdana e a bold</p>';
$html .='<h1>{PAGENO}</h1>';

$mpdf->WriteHTML($html);

$mpdf->Output();
