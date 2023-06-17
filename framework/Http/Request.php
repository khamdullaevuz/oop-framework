<?php

namespace Khamdullaevuz\Framework\Http;

class Request
{
    public function __construct(
        public readonly array $data,
        public readonly string $method = 'GET',
        public readonly string $uri = '/',
    )
    {

    }

    public static function capture(): self
    {
        return new static(
            $_REQUEST,
            $_SERVER['REQUEST_METHOD'],
            $_SERVER['REQUEST_URI'],
        );
    }

    public function data(): array
    {
        return $this->data;
    }

    public function method(): string
    {
        return $this->method;
    }

    public function uri(): string
    {
        return explode('?', $this->uri)[0];
    }
}