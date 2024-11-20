<?php
namespace bng\Controllers;

abstract class BaseController{
    public function view($view, $data = []){

        // check if data is array
        if(!is_array($data)){
            die('Data is not an array: ' . var_dump($data));
        }

        // transform data array into variables
        extract($data);

        // incluir os arquivos de view se existirem
        if(file_exists("../app/views/$view.php")){
            require_once("../app/views/$view.php");
        } else {
            die('View not found: ' . $view);
        }
    }
}