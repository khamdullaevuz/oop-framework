<?php

namespace Khamdullaevuz\Framework\Http;

class Request
{
    public function __construct(
        public readonly array $data
    )
    {

    }

    public static function capture(): self
    {
        return new static($_REQUEST);
    }

    public function data(): array
    {
        return $this->data;
    }
}