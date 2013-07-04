<?php
require(__DIR__ . "/slim/Slim/Slim.php");
\Slim\Slim::registerAutoloader();

$module->exports = new \Slim\Slim();
