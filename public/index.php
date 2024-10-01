<?php
use DMC\Framework\Http\Kernel;
use DMC\Framework\Http\Request;
use DMC\Framework\Http\Response;

define('BASE_PATH', dirname(__DIR__));


require_once BASE_PATH . '/vendor/autoload.php';

$request = Request::create();
$request->getMethod();
$request->getUri();
$request->displayArguments();
