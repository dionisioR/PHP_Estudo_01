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

// chamar a função para criar o CSV
write_csv('ficheiros_de_dados/output.csv', $data);


function write_csv($csv_file, $data){

    // cria a spreadsheet
    $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();

    // define a spreadsheet ativa
    $active_sheet = $spreadsheet->getActiveSheet();

    // adiciona os dados à spreadsheet
    $active_sheet->fromArray($data);

    // cria o objeto para escrita em CSV e define algumas opções
    $writer = new \PhpOffice\PhpSpreadsheet\Writer\Csv($spreadsheet);
    $writer->setDelimiter(';');     // campos delimitados por ;
    $writer->setEnclosure('');      // campos sem delimitação de aspas
    $writer->setLineEnding("\r\n"); // definição da quebra de linha

    // finalmente guarda o ficheiro
    $writer->save($csv_file);
}
