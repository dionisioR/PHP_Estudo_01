<?php

/* 
Podemos usar praticamente todo o tipo de formatação de CSS mais básica,
como cores, tipos de letra, background, posicionamentos, tamanhos de letra, etc.
*/

require_once('vendor/autoload.php');
use Mpdf\Mpdf;

// vamos colocar a página num formato horizontal.
$mpdf = new Mpdf([
    'mode' => 'utf-8',
    'format' => 'A4',
    'orientation' => 'P'
]);

$html = '<p style="position: absolute; top: 50px; left: 50px; color: white; background-color: blue; padding: 10px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, repudiandae!</p>';

$html .= '<p style="position: absolute; top: 100px; left: 50px; width: 200px; height: 200px; background-color: yellow; font-size: 18px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, repudiandae!</p>';

$html .= '<p style="position: absolute; top: 400px; left: 0px; width: 100%; text-align: center">Este texto vai aparecer centrado.</p>';

$html .= '<div style="position: absolute; top: 500px; left: 20px; background-color: black; width: 750px; height: 1px;">&nbsp;</div>';

$html .= '<div style="position: absolute; top: 600px; left: 20px; width: 750px; text-align: center;"><img src="images/img_test.png"></div>';

$mpdf->WriteHTML($html);

$mpdf->Output();
