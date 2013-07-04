<?php
require("./slim/Slim/Slim.php");
\Slim\Slim::registerAutoloader();

$module->exports = new \Slim\Slim();
