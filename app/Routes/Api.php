<?php

$router = new \Bramus\Router\Router();

/**
 * ROTAS
 * 
 * @example $router->get('/', API_NAMESPACE."\HomeController@index");
 */ 
$router->get('/api/', API_NAMESPACE."\Teste@index");
$router->post('/api/', API_NAMESPACE."\Teste@index");
$router->put('/api/', API_NAMESPACE."\Teste@index");
$router->delete('/api/', API_NAMESPACE."\Teste@index");

//Vamos!
$router->run();
