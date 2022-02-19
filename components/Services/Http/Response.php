<?php

namespace SM\Services\Http;

class Response
{
    /**
     * @var Array
     */
    public $response;

    /**
     * @var Int
     */
    public $code;
    
    /**
     * @var String
     */
    public $content;
    

    /**
     * @param Int $code 
     * @param Array $content
     * 
     * @return Function | App\Services\Api\Response\make()
     */
    // public function __construct(Int $code = 200, Array $content)
    // {
    //     $this->code     = $code;
    //     $this->content  = $content;
    //     return $this->make();
    // }


    /**
     * 
     */
    public function make()
    {
        header("HTTP/1.1 ".$this->code);
        header('Content-Type: application/json');
        echo json_encode($this->content);
    }
}
