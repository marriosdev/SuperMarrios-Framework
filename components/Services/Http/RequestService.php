<?php

namespace SM\Services\Http;

use SM\Services\Http;

trait RequestService
{
    /**
     * 
     * @var $parseInput
     */
    private  $parseInput;

    /**
     * @var Array $inputs  
     */
     public $inputs;

     /**
      * Iniciador 
      */
    private function init()
    {
        $this->_getInputsFromRequest();
        $this->_setInputAsClassProperty();
        $this->_getInput();
    }    

    /***
     * Retorna um array com todos os inputs 
     * 
     * @return Array $inputs
     * 
    */
    private function _getInput()
    {
        return $this->inputs;
    }

    /**
     * Pega todos os inputs da requisição
     */
    private function _getInputsFromRequest()
    {
        parse_str(file_get_contents('php://input'), $this->parseInput);
    }

    /**
     * Definindo os inputs como propriedades da classe
     */
    private function _setInputAsClassProperty()
    {
        foreach($this->parseInput as $property=>$value)
        {
            $this->$property = $value;
        }
    }
}