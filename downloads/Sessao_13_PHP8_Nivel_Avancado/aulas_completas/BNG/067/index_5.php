<?php

require_once('vendor/autoload.php');
use Mpdf\Mpdf;

$mpdf = new Mpdf([
    'mode' => 'utf-8',
    'format' => 'A4',
    'orientation' => 'P'
]);

$html = '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat, doloremque!</p>';

$mpdf->WriteHTML($html);

// output direto para o browser (abrir o PDF)
// $mpdf->Output();

// output para download de ficheiro
// $mpdf->Output('nome_do_ficheiro.pdf', \Mpdf\Output\Destination::DOWNLOAD);

// definir senha para abrir o PDF
// $mpdf->SetProtection([], '123456');
// $mpdf->Output('nome_do_ficheiro.pdf', \Mpdf\Output\Destination::DOWNLOAD);


