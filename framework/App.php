<?php

namespace Khamdullaevuz\Framework;

use Khamdullaevuz\Framework\Exceptions\InvalidInstanceException;
use Khamdullaevuz\Framework\Interfaces\KernelInterface;

class App
{
    /**
     * @throws InvalidInstanceException
     */
    public static function make(string $object, ...$params): KernelInterface
    {
        $instance = new $object(...$params);
        if(!$instance instanceof KernelInterface) {
            throw new InvalidInstanceException();
        }

        return $instance;
    }
}