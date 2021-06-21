<?php

use CoffeeCode\Router\Router;

$router = new Router(URL);

$router->namespace("Source\App");


$router->group(null);
$router->get("/", "Web:home");


$router->group("ops");
$router->get("/{errcode}", "Error:error");


$router->dispatch();

if ($router->error()) {
  $router->redirect("/ops/{$router->error()}");
}
