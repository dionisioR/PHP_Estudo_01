<?php

namespace bng\Controllers;

class Main
{
    public function index($id = null)
    {
        teste();
        echo "Estou dentro do controlador Main - index";
        echo '<br>';
        echo "O id indicado foi $id";
    }
}