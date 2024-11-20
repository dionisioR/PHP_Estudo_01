<?php

/* 

Vamos ao primeiro passo: a instalação.

https://packagist.org/packages/mpdf/mpdf

Vamos usar o composer para adicionar esta dependência ao nosso projeto.

composer require mpdf/mpdf

NOTA: São cerca de 90 Mb de informação que vão ser descarregadas para a pasta vendor.
Não existe preocupação nesta matéria. As dependências não irão provocar prejuízos de
performance nas nossas aplicações.

Outra nota: a documentação desta dependência é um pouco confusa, misturando várias
versões e funcionalidades descontinuadas. Vamos concentrar a nossa atenção no fundamental.

https://mpdf.github.io/

*/

/* 
Vamos criar o nosso primeiro documento com o mPDF.
*/

require_once('vendor/autoload.php');

use Mpdf\Mpdf;

$mpdf = new Mpdf();
$mpdf->WriteHTML('Olá mundo!');
$mpdf->Output();

// o que aconteceu aqui?
