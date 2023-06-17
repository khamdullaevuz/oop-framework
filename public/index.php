<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Khamdullaevuz\Framework\Http\Kernel;
use Khamdullaevuz\Framework\Http\Request;
use Khamdullaevuz\Framework\Http\Router;

$router = new Router([
    '/' => [
        'GET' => fn($data) => array_merge([
            'message' => 'Hello world'
        ], $data)
    ]
]);

$kernel = new Kernel($router);

$response = $kernel->handle(
    Request::capture()
)->send();

var_dump($response);