<?php

namespace App\Controllers\Api;

use SM\Core\SMController;

class Teste extends SMController
{

    public function index($params)
    {
        $this->helper->load("FirstHelper");
        teste();
        return $this->response->make(201, [$params->id]);
    }
}
