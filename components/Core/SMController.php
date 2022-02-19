<?php

namespace SM\Core;

use SM\Services\Http\Request;
use SM\Services\Http\Response;

class SMController
{
    /**
     * @var object SM\Services\Http\Request
     */
    public $request;

    public function __construct()
    {
        $this->request = new Request();
    }
}
