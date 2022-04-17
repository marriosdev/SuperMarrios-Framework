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


$dotenv = Dotenv\Dotenv::createUnsafeImmutable("../");
$dotenv->load();

error_reporting(E_ALL);

if(getenv("DEBUG"))
{
    ini_set("display_errora", 1);
}else{
    ini_set("display_errora", 0);
}
