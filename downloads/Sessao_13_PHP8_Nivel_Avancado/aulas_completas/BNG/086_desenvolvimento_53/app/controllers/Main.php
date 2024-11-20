<?php

namespace Controllers;

use Controllers\BaseController;

class Main extends BaseController
{
    public function index()
    {
        $this->view('home');
    }
}