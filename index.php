<?php
require_once "vendor/autoload.php";

use App\bootstrap\Bootstrap;

new Bootstrap();

//Bootstrap::initEnv();

//echo $_ENV["TESTE"];
//
//Bootstrap::
//ini_set('memory_limit', '-1');
//header("Access-Control-Allow-Origin: *");
//header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");
//header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
//date_default_timezone_set('America/Sao_Paulo');
//
//$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
//$dotenv->load();
//
//require_once "routes.php";