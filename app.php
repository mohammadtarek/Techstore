<?php


//$path=__DIR__ ."/";
define("PATH",__DIR__ ."/");
define("URL","http://localhost/Techstore/");
define("DB_SERVERNAME","localhost");
define("DB_USERNAME","root");
define("DB_PASSWORD","");
define("DB_NAME","techstore"); 
use TechStore\Classes\Session;
use TechStore\Classes\Request;
//include classes
require_once(PATH."vendor/autoload.php");
$request = new Request;
$session = new Session;