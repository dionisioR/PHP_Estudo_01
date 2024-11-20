<?php

// carregar o autoload do composer para podermos usar o PhpSpreadsheet
require 'vendor/autoload.php';

// dados que vamos guardar no XLSX e no CSV
$data = [
    ['nome', 'email', 'telefone'],
    ['teste1', 't1gmail.com', '111222333'],
    ['teste2', 't2gmail.com', '222222333'],
    ['teste3', 't3gmail.com', '333222333'],
];

// chamar a função para criar o XLSX
write_xlsx('ficheiros_de_dados/output.xslx', $data);


function write_xlsx($xlsx_file, $data){

    // cria uma spreadsheet (como se fosse criar um documento Excel)
    $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();

    // remove a sheet criada automaticamente.
    $spreadsheet->removeSheetByIndex(0);

    // cria uma worksheet (uma spreadsheet pode conter várias)
    $worksheet = new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, 'a');

    // adicionamos a worksheet à spreadsheet
    $spreadsheet->addSheet($worksheet);

    // carregamos os dados a partir do array de dados para a worksheet
    $worksheet->fromArray($data);

    // criamos o objeto para escrita e indicamos qual é a spreadsheet que vai ser
    // guardada com este objeto
    $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);

    // guardamos o ficheiro. Vai ser criado com o nome que passamos para a função
    $writer->save($xlsx_file);
}