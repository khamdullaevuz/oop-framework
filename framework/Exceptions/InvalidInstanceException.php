<?php

namespace Khamdullaevuz\Framework\Exceptions;

use Exception;

class InvalidInstanceException extends Exception
{
    public function __construct(string $message = 'Object must be instance of KernelInterface')
    {
        parent::__construct($message);
    }
}