<?php

/**
 * 
 */
require_once(__DIR__."/vendor/autoload.php");

/**
 * Constantes
 */
require_once(__DIR__."/app/Configs/Constants.php");

/**
 * 
 */
if(explode("/", $_SERVER["REQUEST_URI"])[1] == "api"){
    require_once(__DIR__."/app/Routes/Api.php");
}else{
    require_once(__DIR__."/app/Routes/Api.php");
}

/**
 * 
 */
if(AMBIENTE == "localhost"){
    error_reporting(E_ALL);
}else{
    error_reporting(0);
}
 
