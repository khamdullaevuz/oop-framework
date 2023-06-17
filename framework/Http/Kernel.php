<?php

namespace Khamdullaevuz\Framework\Http;

use Khamdullaevuz\Framework\Interfaces\KernelInterface;

class Kernel implements KernelInterface
{
    public function __construct(
        public readonly Router $router
    )
    {
    }

    public function handle(Request $request): Response
    {
        return $this->router->handle($request);
    }
}