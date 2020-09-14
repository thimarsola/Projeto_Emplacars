<?php

ob_start();
session_start();

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(site());
$router->namespace("Source\Controllers");

/**
 * WEB
 */
$router->group(null);
$router->get("/", "Web:home", "web.home");

ob_end_flush();


/**
 * ERRORS
 */
$router->group("opss");
$router->get("/{errcode}", "Web:error", "web.error");



/**
 * ROUTE PROCESS
 */
$router->dispatch();

/**
 * ERRORS PROCESS
 */
if($router->error()){
    $router->redirect("web.error", ["errcode" => $router->error()]);
}
