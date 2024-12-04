<?php 

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

function check_session(){
    // verifica se tem alguma sessão ativa
    return isset($_SESSION['user']);
}


function logger ($mensagem='', $level='info'){
    // cria um canal de logs
    $log = new Logger('app_logs');
    $log->pushHandler(new StreamHandler(LOGS_PATH));

    // adiciona registro de logs condicionado pelo level
    switch($level){
        case 'info':
            $log->info($mensagem);
            break;
        case 'notice':
            $log->notice($mensagem);
            break;
        case 'warning':
            $log->warning($mensagem);
            break;
        case 'error':
            $log->error($mensagem);
            break;
        case 'critical':
            $log->critical($mensagem);
            break;
        case 'emergency':
            $log->emergency($mensagem);
            break;
        default:
            $log->info($mensagem);
            break;
    }
}

function printData($data, $die=true){
    echo '<pre>';
    if(is_object($data) || is_array($data)){
        print_r($data);
    } else {
        echo $data;
    }

    if($die){
        die('<br>FIM<br>');
    }
}

