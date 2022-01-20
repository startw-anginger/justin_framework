<?php
session_start();
require_once __DIR__ . '/../vendor/autoload.php';

use JustinExample\Controllers\Authentic;
use JustinExample\Kernel\Router;
use JustinExample\Middlewares\CORS;
use JustinExample\Middlewares\Access;

(new Router(Authentic::class, "/authentic"))
    ->addMiddleware(true, CORS::class)
    ->addMiddleware(true, Access::class)
    ->register("GET", "/session", "getSession")
    ->register("POST", "/session", "postSession")
    ->register("DELETE", "/session", "deleteSession")
    ->channel();

CORS::preflight();
Router::run();
