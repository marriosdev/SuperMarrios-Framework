<?php

namespace SM\Modules\Http\Response;

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
     */

    public function make($code, $content)
    {
        header("HTTP/1.1 ".$code);
        header('Content-Type: application/json');
        echo json_encode($content);
    }
}
