<?php

require_once('vendor/autoload.php');
use Mpdf\Mpdf;

$mpdf = new Mpdf([
    'mode' => 'utf-8',
    'format' => 'A4',
    'orientation' => 'P'
]);

// definindo colunas
$html = '<columns column-count="2" column-gap="10">';

$html .='<p>texto na primeira coluna</p>';

$html .= '<p>
Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus esse, quod ipsam beatae cumque natus provident exercitationem et velit unde voluptate assumenda. Sapiente, quisquam possimus voluptas autem fugiat reiciendis recusandae dolorum maiores at itaque earum totam cupiditate tempore ea corrupti atque aspernatur nihil facilis quis cum obcaecati. Dolore, temporibus sint!
</p>';

$html .='<columnbreak>';

$html .='<p>texto na segunda coluna</p>';

$mpdf->WriteHTML($html);

$mpdf->Output();
