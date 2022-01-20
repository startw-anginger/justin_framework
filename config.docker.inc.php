<?php

$_CONFIG = array();

$_CONFIG["CORS"] = false;
$_CONFIG["CORS_DOMAIN"] = "";

$_CONFIG["DB_DSN"] = $_ENV["DB_DSN"];
$_CONFIG["DB_USERNAME"] = $_ENV["DB_USERNAME"];
$_CONFIG["DB_PASSWORD"] = $_ENV["DB_PASSWORD"];

return $_CONFIG;
