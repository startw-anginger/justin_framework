<?php
// JustinExample
// (c) 2022 Star Inc.

use JustinExample\Controllers\Authentic;
use JustinExample\Kernel\Router;
use JustinExample\Middlewares\CORS;
use JustinExample\Middlewares\Access;

(new Router(Authentic::class, "/authentic"))
    ->addMiddleware(true, CORS::class)
    ->addMiddleware(true, Access::class)
    ->register("POST", "/token", "postToken")
    ->channel();
