<?php

namespace Khamdullaevuz\Framework;

class App
{
    public static function make(string $object, ...$params): object
    {
        return new $object(...$params);
    }
}