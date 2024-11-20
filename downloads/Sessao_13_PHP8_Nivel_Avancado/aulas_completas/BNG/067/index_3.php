<?php

require_once('vendor/autoload.php');
use Mpdf\Mpdf;

$mpdf = new Mpdf([
    'mode' => 'utf-8',
    'format' => 'A4',
    'orientation' => 'P'
]);

// números de página
$html = '<p>Página n: <strong>{PAGENO}/{nb}</strong></p>';
$html .= '<pagebreak>';
$html .= '<p>Página n: <strong>{PAGENO}/{nb}</strong></p>';

$mpdf->WriteHTML($html);

$mpdf->Output();
