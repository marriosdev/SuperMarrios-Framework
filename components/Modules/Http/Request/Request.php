<?php

namespace SM\Modules\Http\Request;

use SM\Modules\Http\Request\RequestModule;

class Request
{
    use RequestModule;    

    public function __construct()
    {
        $this->init();
    }
} 