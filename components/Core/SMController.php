<?php

namespace SM\Core;

use SM\Modules\Http\Request\Request;
use SM\Modules\Http\Response\Response;

class SMController
{
    /**
     * @var object SM\Modules\Http\Request\Request
     */
    public $request;

    public function __construct()
    {
        $this->request = new Request();
    }
}
