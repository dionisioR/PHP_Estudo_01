<?php

// export all data to CSV file
use RD3W\Database;

require_once('./config.php');
require_once('./libraries/Database.php');

$database = new Database(MYSQL_CONFIG);

// Pegar resultados
$sql = "SELECT * FROM contactos";
$result = $database->execute_query($sql);
$rows = $result->results;

// armazenar dados em arquivo csv

// cria no nome do arquivo
$filename = "contactos_" . time() . ".csv";

// cria o arquivo para escrita
$file = fopen($filename, 'w');

// escreve o cabeçalho
$header = [];
foreach ($rows[0] as $key => $value) {
    $header[] = $key;
}
// armazena o cabeçalho no arquivo
fputcsv($file, $header);

// armazena as linhas no arquivo
$tmp = [];
foreach ($rows as $row) {
    $obj = (array) $row;
    fputcsv($file, $obj);
}

// print_r($header);

// fecha o arquivo
fclose($file);

// download do arquivo
header('Content-Descrition: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="' . $filename . '"');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($filename));
readfile($filename);