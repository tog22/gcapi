<?php

/********************
*                   *
*   PACKAGES USED   *
*                   *
********************/

// Core Slim request & response packages

use Slim\Http\Request;
use Slim\Http\Response;

// is this needed????
use Slim\Container;

// PHP-View for templates

// use Slim\Views\PhpRenderer;

//  MonoLog for logging

// use Psr\Log\LoggerInterface;

/****************
*               *
*   HOME PAGE   *
*               *
****************/

$app->get('/', function (Request $request, Response $response) {
    
    return 'Hello world';
});

