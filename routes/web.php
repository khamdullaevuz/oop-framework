<?php

use Khamdullaevuz\Framework\Http\Router;

return new Router([
    '/' => [
        'GET' => fn($data) => array_merge([
            'message' => 'Hello world'
        ], $data)
    ],
    '/about' => [
        'GET' => fn() => [
            'message' => 'About us'
        ]
    ],
]);