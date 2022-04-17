<?php

/**
 * 
 */
require_once("../vendor/autoload.php");

/**
 * Constantes
 */
require_once("../app/Configs/Constants.php");

/**
 * 
 */
if(explode("/", $_SERVER["REQUEST_URI"])[1] == "api"){
    require_once("../app/Routes/Api.php");
}else{
    require_once("../app/Routes/Api.php");
}

error_reporting(E_ALL);

