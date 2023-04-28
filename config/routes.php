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


use \Tqdev\PhpCrudApi\Config;
use \Tqdev\PhpCrudApi\Api;

/****************
*               *
*   HOME PAGE   *
*               *
****************/

$app->get('/', function (Request $request, Response $response) {
    
    return 'Hello world';
});

// Add this handler for PHP-CRUD-API:
$app->any('/api[/{params:.*}]', function (Request $request, Response $response) {
    $config = new Config([
        'username' => 'un', // actual details obscured
        'password' => 'pw',
        'database' => 'db',
        'basePath' => '/api',
    ]);
    $api = new Api($config);
    $response = $api->handle($request);
    return $response;
});