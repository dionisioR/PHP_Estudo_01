<?php

require_once('vendor/autoload.php');
use Mpdf\Mpdf;

$mpdf = new Mpdf([
    'mode' => 'utf-8',
    'format' => 'A4',
    'orientation' => 'P'
]);

// definir um template base para o documento.
$mpdf->SetDocTemplate('template/base_template.pdf');

$html = '<h1 style="position: absolute; top: 20px; left: 20px; width: 720px; text-align: center;">Título do documento</h1>';
$html .= '<p style="position: absolute; top: 130px; left: 120px; width: 550px; text-align: justify;">
Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, assumenda impedit? Laboriosam cupiditate modi blanditiis rem cum deserunt cumque autem, repudiandae natus incidunt nobis, exercitationem pariatur nemo obcaecati iure. Dolorem?
Placeat tenetur obcaecati voluptatem. Odit odio amet esse ea quisquam sequi praesentium magni delectus, iusto, reiciendis facilis! Veniam, vel. Veniam magnam aspernatur autem, libero quae praesentium possimus laudantium expedita est.
</p>';

$html .= '<p style="position: absolute; top: 340px; left: 120px; width: 550px; text-align: justify;">
Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, assumenda impedit? Laboriosam cupiditate modi blanditiis rem cum deserunt cumque autem, repudiandae natus incidunt nobis, exercitationem pariatur nemo obcaecati iure. Dolorem?
Placeat tenetur obcaecati voluptatem. Odit odio amet esse ea quisquam sequi praesentium magni delectus, iusto, reiciendis facilis! Veniam, vel. Veniam magnam aspernatur autem, libero quae praesentium possimus laudantium expedita est.
Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, assumenda impedit? Laboriosam cupiditate modi blanditiis rem cum deserunt cumque autem, repudiandae natus incidunt nobis, exercitationem pariatur nemo obcaecati iure. Dolorem?
Placeat tenetur obcaecati voluptatem. Odit odio amet esse ea quisquam sequi praesentium magni delectus, iusto, reiciendis facilis! Veniam, vel. Veniam magnam aspernatur autem, libero quae praesentium possimus laudantium expedita est.
Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, assumenda impedit? Laboriosam cupiditate modi blanditiis rem cum deserunt cumque autem, repudiandae natus incidunt nobis, exercitationem pariatur nemo obcaecati iure. Dolorem?
Placeat tenetur obcaecati voluptatem. Odit odio amet esse ea quisquam sequi praesentium magni delectus, iusto, reiciendis facilis! Veniam, vel. Veniam magnam aspernatur autem, libero quae praesentium possimus laudantium expedita est.
Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, assumenda impedit? Laboriosam cupiditate modi blanditiis rem cum deserunt cumque autem, repudiandae natus incidunt nobis, exercitationem pariatur nemo obcaecati iure. Dolorem?
Placeat tenetur obcaecati voluptatem. Odit odio amet esse ea quisquam sequi praesentium magni delectus, iusto, reiciendis facilis! Veniam, vel. Veniam magnam aspernatur autem, libero quae praesentium possimus laudantium expedita est.
</p>';

$mpdf->WriteHTML($html);

$mpdf->Output();
