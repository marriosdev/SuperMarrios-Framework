<?php

use Marrios\Router\HttpRouter;
use App\Controllers\Api\Teste;

$router = new HttpRouter();

// Set route
$router->get("/helloworld/{id}", [Teste::class, "index"])->run();
$router->notFound();