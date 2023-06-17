<?php

namespace Khamdullaevuz\Framework\Http;

class Response
{
    public function __construct(
        public readonly array $data
    )
    {
    }

    public function send(): array
    {
        return $this->data;
    }
}