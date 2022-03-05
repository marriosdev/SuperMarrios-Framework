<?php

namespace App\Controllers\Api;

use SM\Core\SMController;

class Teste extends SMController
{

    public function index()
    {
        echo $this->request->nome;
    }
}


