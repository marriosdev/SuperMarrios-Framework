<?php

namespace App\Controllers\Api;

use SM\Core\SMController;
use SM\Services\Http\Request;

class Teste extends SMController
{

    public function index()
    {
        var_dump($this->request);
    }
}
