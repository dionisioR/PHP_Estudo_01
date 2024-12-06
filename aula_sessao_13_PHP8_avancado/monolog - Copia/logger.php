<?php 
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

function logger ($mensagem='', $level='info'){
    // cria um canal de logs
    $log = new Logger('registro_logs');
    $log->pushHandler(new StreamHandler('logs.log'));

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