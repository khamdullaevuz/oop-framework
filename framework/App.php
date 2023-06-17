<?php

namespace Khamdullaevuz\Framework;

use Exception;
use Khamdullaevuz\Framework\Interfaces\KernelInterface;

class App
{
    /**
     * @throws Exception
     */
    public static function make(string $object, ...$params): KernelInterface
    {
        $instance = new $object(...$params);
        if(!$instance instanceof KernelInterface) {
            throw new Exception('Object must be instance of KernelInterface');
        }

        return $instance;
    }
}