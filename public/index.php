<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Khamdullaevuz\Framework\Http\Kernel;
use Khamdullaevuz\Framework\Http\Request;

$kernel = new Kernel();

$response = $kernel->handle(
    Request::capture()
)->send();

var_dump($response);