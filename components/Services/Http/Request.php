<?php

namespace SM\Services\Http;
use SM\Services\Http\RequestService;

class Request
{
    use RequestService;    

    public function __construct()
    {
        $this->init();
    }
} 