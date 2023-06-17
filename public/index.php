<?php

require_once __DIR__ . '/../vendor/autoload.php';
$router = require __DIR__ . '/../routes/web.php';

use Khamdullaevuz\Framework\App;
use Khamdullaevuz\Framework\Http\Kernel;
use Khamdullaevuz\Framework\Http\Request;

$kernel = App::make(Kernel::class, $router);

$response = $kernel->handle(
    Request::capture()
)->send();

header('Content-Type: application/json');

echo json_encode($response);