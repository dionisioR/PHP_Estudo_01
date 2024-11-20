<?php

/* 
Vamos começar a desvendar as principais funcionalidades que vão dar
conta das tuas necessidades quando usas o mPDF.
E como o objetivo é chegar aos resultados da forma mais rápida,
vamos concentrar a nossa atenção na escrita do PDF a partir de HTML.
*/

// Para iniciar o PDF, carregamos a biblioteca e definimos o objeto com new Mpdf()
require_once('vendor/autoload.php');
use Mpdf\Mpdf;

$mpdf = new Mpdf();

// vamos escrever HTML no documento
$html = '<h1>Título h1</h1>';
$html .= '<h2>Título h2</h2>';
$html .= '<h3>Título h3</h3>';
$html .= '<h4>Título h4</h4>';
$html .= '<h5>Título h5</h5>';
$html .= '<h6>Título h6</h6>';
$html .= '<p>Este texto está num parágrafo de HTML.</p>';

// podemos definir cores para o texto
$html .= '<p style="color: red;">Este texto está a vermelho.</p>';

// podemos definir o tipo de letra
$html .= '<p style="font-family: Verdana; font-weight: bold">Escrever com letra Verdana e a bold</p>';

// podemos usar tags especiais que vão apresentar informação específica.
$html .='<h1>{PAGENO}</h1>';

// vamos definir o html que vai ser escrito no documento
$mpdf->WriteHTML($html);

// vamos fazer a apresentação do documento
$mpdf->Output();
